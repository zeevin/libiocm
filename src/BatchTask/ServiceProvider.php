<?php
/**
 * @link   https://www.init.lu
 *
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
        $app['batchTaskCreate'] = function ($app) {
            return new CreateClient($app);
        };

        $app['batchTaskQuery'] = function ($app) {
            return new QueryClient($app);
        };
        $app['batchTaskQueryDetail'] = function ($app) {
            return new QueryDetailClient($app);
        };
    }
}
