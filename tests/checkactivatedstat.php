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

$request = new \Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\CheckActivatedStat\Request();
$request->setAppId($iotConfig['appId']);
/** @var \Zeevin\Libiocm\Reg\CheckActivatedStatClient $app_check] */
$app_check = $app['reg.checkActivatedStat'];
$device_id = '11baaddf-e828-4b7f-87a2-094a7f944b1d';
/** @var \Zeevin\Libiocm\Reg\ResponseAttribute\DeviceCredentials\CheckActivatedStat\Response $ret */
$ret =  $app_check->setUrlExtend($device_id)->request($request->serialize())->getResult();
print_r($ret);
