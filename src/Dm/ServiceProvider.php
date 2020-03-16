<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午4:16
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['dmDeleteDevice'] = function ($app) {
            return new DeleteDeviceClient($app);
        };
        $app['dmUpdateDevice'] = function ($app) {
            return new UpdateDeviceClient($app);
        };
        $app['dmQueryDevices'] = function ($app) {
            return new QueryDevicesClient($app);
        };
        $app['dmSingleQuery'] = function ($app) {
            return new SingleQueryClient($app);
        };
        $app['dmQueryDevgroupSpecificMember'] = function ($app) {
            return new SpecificMemberQueryClient($app);
        };
        $app['dmAppendDevgroupSpecificMember'] = function ($app) {
            return new SpecificMemberAppendClient($app);
        };
        $app['dmDeleteDevgroupSpecificMember'] = function ($app) {
            return new SpecificMemberDeleteClient($app);
        };
    }
}
