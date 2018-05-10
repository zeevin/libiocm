<?php
/**
 * @link   http://www.init.lu
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
/** @var \Zeevin\Libiocm\Reg\CheckActivatedStatClient $app_check] */
$app_del = $app['dm.deleteDevice'];
$device_id = '79a1c014-3526-43ab-8b84-9d3142291c12';

$ret =  $app_del->setUrlExtend($device_id)->request($request->serialize())->getResult();
print_r($ret);
