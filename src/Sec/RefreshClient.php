<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午5:01
 * Source: RefreshClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sec;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class RefreshClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'sec';
    protected $id = 'refreshToken';
    protected $method = 'POST';

    public function getId(): string
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
        return $this->getDomain().'/'.$this->getVersion().'/'.$this->getId();
    }


}