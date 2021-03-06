<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:57
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscribe\Create\Request();
$request->setNotifyType('swUpgradeStateChangeNotify')
    ->setCallbackUrl('https://iot.init.lu:443/callback.php');

//print_r($request->serialize());exit;
$ret = $app->subCreate->request($request)->getResult();
print_r($ret);
