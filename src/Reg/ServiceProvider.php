<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午9:03
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['regReg'] = function ($app) {
            return new RegClient($app);
        };

        $app['regCheckActivatedStat'] = function ($app) {
            return new CheckActivatedStatClient($app);
        };

        $app['regRefreshKey'] = function ($app) {
            return new RefreshKeyClient($app);
        };
    }
}
