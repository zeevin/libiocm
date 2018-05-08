<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午8:42
 * Source: RegClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class RegClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'reg';
    protected $id = 'devices';
    protected $method = 'POST';

    public function getId()
    {
        return $this->id;
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
        return $this->getDomain().'/'.$this->getVersion().'/'.$this->getId().'?appId='.$this->getAppId();
    }

}