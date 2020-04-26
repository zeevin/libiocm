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
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Request();
//$request->setAppId($iotConfig['appId']);
$name = 'NAME1_'.time();
$request->setName($name);
$request->getDeviceConfig()->getDataConfig()->setDataAgingTime(90);

$device_id = '5ee94ea9-68eb-43a1-8a70-c45a7a2161c9';

$ret = $app->dmUpdateDevice->setUrlExtend($device_id)->request($request)->getResult();
print_r($ret);
