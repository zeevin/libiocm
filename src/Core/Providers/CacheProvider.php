<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 上午11:14
 * Source: CacheProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Providers;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class CacheProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $cache = $app['config']->get('cache');

        $app['cache'] = function () use ($cache)
        {
            switch ($cache['default']){
                case 'memcached':
                    $memcached = new \Memcached();
                    $memcached->addServer($cache['stores']['memcached']['server']);

                    $driver = new \Doctrine\Common\Cache\MemcachedCache();
                    $driver->setMemcached($memcached);
                    break;
                default :
                    $driver = new \Doctrine\Common\Cache\PhpFileCache($cache['stores']['file']['patch']);
                    break;
            }

            return $driver;
        };
    }

}