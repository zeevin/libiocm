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
use LSS\Array2XML;

Abstract class BaseClient
{
    protected $client = 'liboocm';
    protected $method = 'POST';
    protected $httpClient;
    protected $response;
    protected $result;
    protected $app;
    protected $id = null;
    protected $urlExtend = null;
    protected $urlParams = null;


    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
    }

    public function getUri()
    {
        $this->uri = $this->getPath();
        if ($this->urlParams)
            $this->uri = $this->uri.'?'.$this->urlParams;
        return $this->uri;
    }

    public function request($body)
    {
        $method = strtoupper($this->getMethod());
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
        $body_array = json_decode((string)$this->response->getBody(),true);
        $body_array['statusCode'] = $this->response->getStatusCode();
        $body_array['reasonPhrase'] = $this->response->getReasonPhrase();
        $body = json_encode($body_array);

        if ($format == 'json' || $format == 'text') {
            $this->result = $body;
        }
        elseif ($format == 'array')
        {
            $this->result = json_decode($body,true);
        }
        elseif ($format == 'object') {
            $object = 'Zeevin\Libiocm\\'.ucfirst($this->getDomain()).'\ResponseAttribute\\'
                .ucfirst($this->getPrefix());
            if($this->getId())
                $object .= '\\'.ucfirst($this->getId());
            $object .= '\Response';
            $this->result = $this->deserialize($body, $object, 'json');
        }
        elseif ($format == 'xml') {
            $arr = json_decode($body,true);
            $xml = Array2XML::createXML('root',$arr);
            $this->result = $xml->saveXML();
        }
        return $this->result;
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        $headers = ['User-Agent' => $this->client];
        if ($this->getPrefix()!='login')
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
        //去掉自动刷新accessToken
//        elseif ($refreshToken = $cache->fetch($cacheConfig['oauth_refresh_key']))
//        {
//            $tmp = explode(':',$refreshToken);
//            $request = new \Zeevin\Libiocm\Sec\RequestAttribute\RefreshToken\Request();
//            $request->setAppId($iotConfig['appId'])->setSecret($iotConfig['secret'])->setRefreshToken($tmp[0]);
//            $ret = $app['sec.refreshToken']->request($request->serialize())->getResult();
//            $app['cache']->save($cacheConfig['oauth_key'],$ret,$ret->getExpiresIn()-600);
//            $app['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getRefreshToken().':'.$ret->getAccessToken(),86400*28);
//        }
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

    /**
     * 获取appId
     * @return mixed
     */
    protected function getAppId()
    {
        $app = $this->app;
        $iotConfig = $app['config']->get('iot');
        return $iotConfig['appId'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->getDomain().'/'.$this->getVersion().'/'.$this->getPrefix().$this->getUrlExtend();
    }

    /**
     * @param mixed ...$params
     *
     * @return $this
     */
    public function setUrlExtend(...$params)
    {
        $extend = '';
        foreach ($params as $item)
        {
            $extend .= '/'.$item;
        }

        $this->urlExtend = $extend;
        return $this;
    }

    /**
     * @return null
     */
    public function getUrlExtend()
    {
        return $this->urlExtend;
    }


    protected function deserialize($data, $object, $format)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        return $serializer->deserialize($data, $object, $format);
    }


}