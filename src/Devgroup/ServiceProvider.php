<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:15
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['devGroupsCreate'] = function ($app) {
            return new CreateClient($app);
        };
        $app['devGroupsDelete'] = function ($app) {
            return new DeleteClient($app);
        };
        $app['devGroupsUpdate'] = function ($app) {
            return new UpdateClient($app);
        };
        $app['devGroupsQuery'] = function ($app) {
            return new QueryClient($app);
        };
        $app['devGroupsQuerySpecific'] = function ($app) {
            return new SpecificQueryClient($app);
        };
    }
}
