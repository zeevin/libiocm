<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\DeleteDevice\Request();
$request->setAppId($iotConfig['appId']);
$app_del = $app['dm.deleteDevice'];
$device_id = 'c84e27f5-a2bb-4411-8e83-41adc52757ae';
//print_r($request->serialize());exit;
$ret =  $app_del->setUrlExtend($device_id)->request($request->serialize())->getResult();
print_r($ret);
