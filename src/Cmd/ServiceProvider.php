<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午9:33
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['cmdCreate'] = function ($app)
        {
            return new CreateClient($app);
        };

        $app['cmdQuery'] = function ($app)
        {
            return new QueryClient($app);
        };

        $app['cmdUpdate'] = function ($app)
        {
            return new UpdateClient($app);
        };
        $app['cmdCreateTask'] = function ($app)
        {
            return new CreateTaskClient($app);
        };
        $app['cmdQueryTask'] = function ($app)
        {
            return new QueryTaskClient($app);
        };

    }
}