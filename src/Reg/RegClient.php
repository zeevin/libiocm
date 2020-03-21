<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午8:42
 * Source: RegClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Reg\ResponseAttribute\DeviceCredentials\Reg\Response;

/**
 * Class RegClient
 * @package Zeevin\Libiocm\Reg
 * @method Response getResult($format = 'object')
 */
class RegClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'reg';
    protected $prefix = 'deviceCredentials';
    protected $method = 'POST';
    protected $id = 'reg';

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

    public function getPath()
    {
        return $this->getResourcePath().'/'.$this->getDomain().'/'.$this->getVersion().'/'.$this->getPrefix().'?appId='.$this->getAppId();
    }
}
