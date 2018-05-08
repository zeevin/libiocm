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
                case 'redis':
                    if ($cache['stores']['redis']['driver'] == 'predis')
                    {
                        $redis = new \Predis\Client(
                            [
                                'scheme' => 'tcp',
                                'host' => $cache['stores']['redis']['host'],
                                'port' => $cache['stores']['redis']['port'],
                                'password' => $cache['stores']['redis']['password'],
                                'database' => $cache['stores']['redis']['database']
                            ]
                        );
                        $driver = new \Doctrine\Common\Cache\PredisCache($redis);
                    }
                    else
                    {
                        $redis = new \Redis();
                        $redis->connect($cache['stores']['redis']['host'],$cache['stores']['redis']['port']);
                        $redis->select($cache['stores']['redis']['database']);
                        $driver = new \Doctrine\Common\Cache\RedisCache();
                        $driver->setRedis($redis);
                    }

                    break;
                default :
                    $driver = new \Doctrine\Common\Cache\PhpFileCache($cache['stores']['file']['patch']);
                    break;
            }

            return $driver;
        };
    }

}