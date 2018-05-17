<?php
/**
 * @link   https://www.init.lu
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
        Zeevin\Libiocm\Reg\ServiceProvider::class,
        Zeevin\Libiocm\Dm\ServiceProvider::class,
        Zeevin\Libiocm\Sub\ServiceProvider::class,
        Zeevin\Libiocm\Data\ServiceProvider::class,
        Zeevin\Libiocm\Cmd\ServiceProvider::class
    ];

}