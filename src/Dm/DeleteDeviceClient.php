<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午4:16
 * Source: DeleteDeviceClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class DeleteDeviceClient extends BaseClient implements ClientInterface
{

    protected $version = 'v1.1.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'DELETE';
    protected $id = 'deleteDevice';

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