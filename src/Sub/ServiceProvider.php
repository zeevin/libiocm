<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:55
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub;


use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['sub.reg'] = function ($app)
        {
            return new RegClient($app);
        };
        $app['sub.query'] = function ($app)
        {
            return new QueryClient($app);
        };
        $app['sub.create'] = function ($app)
        {
            return new CreateClient($app);
        };
        $app['sub.query.batch'] = function ($app)
        {
            return new BatchQueryClient($app);
        };
    }
}