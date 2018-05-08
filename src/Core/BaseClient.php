<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:11
 * Source: BaseClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core;

use GuzzleHttp\Client;

Abstract class BaseClient
{
    protected $client = 'liboocm';
    protected $method = 'POST';
    protected $httpClient;
    protected $response;
    protected $result;


    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }

    public function getUri()
    {
        $params = [];
        $this->uri = $this->getPath();

        return $this->uri;
    }

    public function request($body)
    {
        $method = strtoupper($this->getMethod());
//        print_r($this->getHeaders());exit;
        $this->response = $this->getHttpClient()->request(
            $method,
            $this->getUri(),
            [
                'body'   => $body,
                'verify' => false,
                'headers' => $this->getHeaders(),
                'cert'   => [
                    '/Users/connor/www/libiocm/cert/key.pem',
                    'IoM@1234',
                ],
            ]
        );

        return $this;
    }

    protected function getHttpClient(): Client
    {
        return $this->app['http_client'];
    }

    /**
     * @param string $format
     *
     * @return array|\JMS\Serializer\scalar|mixed|null|object|string|string[]
     */
    public function getResult($format = 'object')
    {
//        print_r($this->response->getBody());exit;
        $body = (string)$this->response->getBody();
        if ($format == 'json') {
            $this->result = $body;
        } elseif ($format == 'xml') {
            $arr = json_decode($body,true);
            $xml = new \SimpleXMLElement('<root/>');
            array_walk_recursive($arr, [$xml,'addChild']);
            $this->result = $xml->asXML();
        } elseif ($format == 'object') {
            $object = 'Zeevin\Libiocm\\'.$this->getDomain().'\ResponseAttribute\\'.ucfirst($this->getId()).'\Response';
            $this->result = $this->deserialize($body, $object, 'json');
        }
        elseif ($format == 'array')
        {
            $this->result = json_decode($body,true);
        }

        return $this->result;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        $headers = ['User-Agent' => $this->client];
        if ($this->getId()!='login')
        {
            $app = $this->app;
            $iotConfig = $app['config']->get('iot');
            $headers['Content-Type'] = 'application/json';
            $headers['app_key'] = $iotConfig['appId'];
            $headers['Authorization'] = 'Bearer '.$this->getAccessToken();
        }

        return $headers;
    }

    /**
     * @return mixed
     */
    protected function getAccessToken()
    {
        $app = $this->app;
        $cache = $app['cache'];
        $cacheConfig = $app['config']->get('cache');
        $iotConfig = $app['config']->get('iot');

        if ($ret = $cache->fetch($cacheConfig['oauth_key']))
        {

        }
        elseif ($refreshToken = $cache->fetch($cacheConfig['oauth_refresh_key']))
        {
            $tmp = explode(':',$refreshToken);
            $request = new \Zeevin\Libiocm\Sec\RequestAttribute\RefreshToken\Request();
            $request->setAppId($iotConfig['appId'])->setSecret($iotConfig['secret'])->setRefreshToken($tmp[0]);
            $ret = $app['sec.refresh']->request($request->serialize())->getResult();
            $app['cache']->save($cacheConfig['oauth_key'],$ret,$ret->getExpiresIn()-600);
            $app['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getRefreshToken().':'.$ret->getAccessToken(),86400*28);
        }
        else
        {
            $request = new \Zeevin\Libiocm\Sec\RequestAttribute\Login\Request();
            $request->setAppId($iotConfig['appId'])->setSecret($iotConfig['secret']);
            /** @var \Zeevin\Libiocm\Sec\ResponseAttribute\Login\Response $ret */
            $ret = $app['sec.login']->request($request->serialize('form-url-encode'))->getResult();
            $app['cache']->save($cacheConfig['oauth_key'],$ret,$ret->getExpiresIn()-600);
            $app['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getRefreshToken().':'.$ret->getAccessToken(),86400*28);
        }

        return $ret->getAccessToken();
    }


    protected function deserialize($data, $object, $format)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        return $serializer->deserialize($data, $object, $format);
    }


}