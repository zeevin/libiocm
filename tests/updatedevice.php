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

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Request();
//$request->setAppId($iotConfig['appId']);
$name = 'NAME_'.time();
$request->getRequest()->setName($name)->setManufacturerId('SmileIot')->setManufacturerName('SmileIotCompany');
$request->getRequest()->getDeviceConfig()->getDataConfig()->setDataAgingTime(90);
/** @var \Zeevin\Libiocm\Dm\UpdateDeviceClient $app_update */
$app_update = $app['dm.updateDevice'];
$device_id = '11528384-61d0-4822-8a68-0e262ae9f1b2';
//print_r($request->serialize());exit;
$ret =  $app_update->setUrlExtend($device_id)->request($request->serialize())->getResult('json');
print_r($ret);
