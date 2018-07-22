<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午9:33
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['batchtask.create'] = function ($app)
        {
            return new CreateClient($app);
        };

        $app['batchtask.query'] = function ($app)
        {
            return new QueryClient($app);
        };


    }
}