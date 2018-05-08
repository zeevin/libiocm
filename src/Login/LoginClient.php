<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:17
 * Source: LoginClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Login;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class LoginClient extends BaseClient implements ClientInterface
{
    protected $id = 'Login';
    protected $path = '/iocm/app/sec/v1.1.0/login';
    protected $method = 'POST';

    public function getId()
    {
        return $this->id;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getPath()
    {
        return $this->path;
    }


}