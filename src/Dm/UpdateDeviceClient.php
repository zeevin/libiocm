<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午9:20
 * Source: UpdateDeviceClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class UpdateDeviceClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'PUT';
    protected $id = 'updateDevice';

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }
    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

}