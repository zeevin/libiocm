<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:15
 * Source: ServiceProvider.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sec;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['secLogin'] = function ($app)
        {
            return new LoginClient($app);
        };

        $app['secRefreshToken'] = function ($app)
        {
            return new RefreshTokenClient($app);
        };
    }
}