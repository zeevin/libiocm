<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:11
 * Source: BaseClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use LSS\Array2XML;

abstract class BaseClient
{
    protected $client = 'libiocm';
    protected $response;
    protected $result;
    protected $app;
    protected $id = null;
    protected $urlExtend = null;
    protected $httpErrors = [];
    protected $config;
    /**
     * 为了适配有些接口GET参数必须从url中代入，而不能从body中传入的问题，如1.2.3.1 按条件批量查询设备，此接口所有的参数
     * 必须要求拼接到url中，真是个蛋疼的接口.
     *
     * @var null
     */
    protected $urlParams = null;
    /**
     * @var string
     */
    private $uri;

    public function __construct(ServiceContainer $app)
    {
        $this->app = $app;
        $this->config = $app->config->get('iot');
    }

    public function getUri()
    {
        $this->uri = $this->getPath();
        if ($this->urlParams) {
            $this->uri = $this->uri.'?'.$this->urlParams;
        }

        return $this->uri;
    }

    /**
     * @param string $body
     *
     * @return $this
     */
    public function request($body = '')
    {
        $method = strtoupper($this->getMethod());

        try {
            $this->response = $this->getHttpClient()->request(
                $method,
                $this->getUri(),
                [
                    'body'    => $body,
                    'verify'  => false,
                    'headers' => $this->getHeaders(),
                    'cert'    => [
                        $this->config['cert'],
                        $this->config['cert_password'] ?? 'IoM@1234',
                    ],
                ]
            );
        } catch (ClientException $e) {
            $this->httpErrors = [
                'statusCode'   => $e->getCode(),
                'reasonPhrase' => $e->getResponse()->getReasonPhrase(),
            ];
            $message = (array) json_decode(
                $e->getResponse()->getBody()->getContents()
            );
            $this->httpErrors = array_merge($this->httpErrors, $message);
        }

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
        if (empty($this->httpErrors)) {
            $body_array = json_decode(
                (string) $this->response->getBody(),
                true
            );

            $body_array['statusCode'] = $this->response->getStatusCode();
            $body_array['reasonPhrase'] = $this->response->getReasonPhrase();
        } else {
            $body_array = $this->httpErrors;
        }

        if (isset($body_array['error_desc'])) {
            $body_array['errorDesc'] = $body_array['error_desc'];
            unset($body_array['error_desc']);
        }
        if (isset($body_array['error_code'])) {
            $body_array['errorCode'] = $body_array['error_code'];
            unset($body_array['error_code']);
        }

        $body = json_encode($body_array);

        if ($format == 'json' || $format == 'text') {
            $this->result = $body;
        } elseif ($format == 'array') {
            $this->result = json_decode($body, true);
        } elseif ($format == 'object') {
            $object = 'Zeevin\Libiocm\\'.ucfirst($this->getDomain())
                .'\ResponseAttribute\\'
                .ucfirst($this->getPrefix());
            if ($this->getId()) {
                $object .= '\\'.ucfirst($this->getId());
            }
            $object .= '\Response';
            $this->result = $this->deserialize($body, $object, 'json');
        } elseif ($format == 'xml') {
            $arr = json_decode($body, true);
            $xml = Array2XML::createXML('root', $arr);
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
        if ($this->getPrefix() != 'login') {
            $app = $this->app;
            $iotConfig = $app->config->get('iot');
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

        if ($ret = $cache->fetch($cacheConfig['oauth_key'])) {
        } else {
            $request = new \Zeevin\Libiocm\Sec\RequestAttribute\Login\Request();
            $request->setAppId($iotConfig['appId'])->setSecret(
                $iotConfig['secret']
            );
            /** @var \Zeevin\Libiocm\Sec\ResponseAttribute\Login\Response $ret */
            $ret = $app->secLogin->request(
                $request->serialize('form-url-encode')
            )->getResult();
            $app->cache->save(
                $cacheConfig['oauth_key'],
                $ret,
                $ret->getExpiresIn() - 600
            );
            $app->cache->save(
                $cacheConfig['oauth_refresh_key'],
                $ret->getRefreshToken().':'.$ret->getAccessToken(),
                86400 * 28
            );
        }

        return $ret->getAccessToken();
    }

    /**
     * 获取appId.
     *
     * @return mixed
     */
    protected function getAppId()
    {
        $app = $this->app;
        $iotConfig = $app->config->get('iot');

        return $iotConfig['appId'];
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPath()
    {
        return $this->getResourcePath().'/'.$this->getDomain().'/'.$this->getVersion().'/'.$this->getPrefix()
            .$this->getUrlExtend();
    }

    /**
     * @param mixed ...$params
     *
     * @return $this
     */
    public function setUrlExtend(...$params)
    {
        $extend = '';
        foreach ($params as $item) {
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

    /**
     * @return null
     */
    public function getUrlParams()
    {
        return $this->urlParams;
    }

    /**
     * @param $urlParams
     *
     * @return $this
     */
    public function setUrlParams($urlParams)
    {
        $this->urlParams = $urlParams;

        return $this;
    }

    /**
     * @return string
     */
    public function getResourcePath(): string
    {
        return  'iocm/app';
    }

    protected function deserialize($data, $object, $format)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $object = class_exists($object) ? $object : BaseResponseAttribute::class;

        return $serializer->deserialize($data, $object, $format);
    }
}
