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
    protected $id;
    protected $app;
    protected $path;
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
        $this->uri = $this->path;

        return $this->uri;
    }

    public function request($body)
    {
        $method = strtoupper($this->method);
        $this->response = $this->getHttpClient()->request(
            $method,
            $this->getUri(),
            [
                'body'   => $body,
                'verify' => false,
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
        $body = (string)$this->response->getBody();
        if ($format == 'json') {
            $this->result = $body;
        } elseif ($format == 'xml') {
            $arr = json_decode($body,true);
            $xml = new \SimpleXMLElement('<root/>');
            array_walk_recursive($arr, [$xml,'addChild']);
            $this->result = $xml->asXML();
        } elseif ($format == 'object') {
            $object = 'Zeevin\Libiocm\\'.$this->id.'\Response\ResponseAttribute';
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

    protected function deserialize($data, $object, $format)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        return $serializer->deserialize($data, $object, $format);
    }


}