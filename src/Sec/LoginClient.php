<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:17
 * Source: LoginClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sec;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class LoginClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'sec';
    protected $prefix = 'login';
    protected $method = 'POST';

    public function getPrefix()
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