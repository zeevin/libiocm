<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午6:21
 * Source: queryhistory.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');

$request = new Zeevin\Libiocm\Data\RequestAttribute\DeviceDataHistory\QueryHistory\Request();
$request->setAppId($iotConfig['appId'])->setDeviceId('2f41a999-3031-41bf-8aeb-a4d27eb9b547')
->setGatewayId('2f41a999-3031-41bf-8aeb-a4d27eb9b547');

$ret = $app->dataDeviceDataHistory->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
