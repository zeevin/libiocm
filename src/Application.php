<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午2:36
 * Source: Application.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm;

use Zeevin;
use Zeevin\Libiocm\Core\ServiceContainer;

class Application extends ServiceContainer
{
    protected $providers = [
        Zeevin\Libiocm\Core\Providers\CacheProvider::class,
        Zeevin\Libiocm\Sec\ServiceProvider::class,
    ];

}