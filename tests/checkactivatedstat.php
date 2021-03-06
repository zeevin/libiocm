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

$request = new \Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\CheckActivatedStat\Request();
$request->setAppId($iotConfig['appId']);

$device_id = '1c46924d-6e15-412e-8928-055acc452122';
$ret = $app->regCheckActivatedStat->setUrlExtend($device_id)->request($request)->getResult();
print_r($ret);
