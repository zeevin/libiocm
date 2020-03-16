<?php
/**
 * @link   https://www.init.lu
 *
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
        $app['subReg'] = function ($app) {
            return new RegClient($app);
        };
        $app['subQuery'] = function ($app) {
            return new QueryClient($app);
        };
        $app['subCreate'] = function ($app) {
            return new CreateClient($app);
        };
        $app['subQueryBatch'] = function ($app) {
            return new BatchQueryClient($app);
        };
        $app['subDelete'] = function ($app) {
            return new DeleteClient($app);
        };
        $app['subDeleteBatch'] = function ($app) {
            return new BatchDeleteClient($app);
        };
    }
}
