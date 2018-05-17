<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午6:28
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['data.deviceDataHistory'] = function ($app)
        {
            return new QueryHistoryClient($app);
        };
        $app['data.queryCapabilities'] = function ($app)
        {
            return new QueryCapabilitiesClient($app);
        };
    }

}