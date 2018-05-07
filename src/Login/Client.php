<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:17
 * Source: Client.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Login;


use Zeevin\Libiocm\Core\BaseClient;

class Client extends BaseClient
{
    protected $id = 'Login';
    protected $path = '/iocm/app/sec/v1.1.0/login';
    protected $method = 'POST';
}