<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\DeleteDevice\Request();
$request->setAppId($iotConfig['appId']);
$app_del = $app['dm.deleteDevice'];
$device_id = '0dc75566-f7a3-4147-a3df-1ff21883b7a2';
//print_r($request->serialize());exit;
$ret = $app_del->setUrlExtend($device_id)->request($request->serialize())->getResult();
print_r($ret);
