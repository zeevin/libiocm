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

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request();
$request->setAppId($iotConfig['appId'])->setSelect('imsi');

$device_id = '8e7b94d1-c38e-414f-81f2-54ce98ac774c';
$ret = $app->dmSingleQuery->setUrlExtend($device_id)->setUrlParams(
    $request->serialize('form-url-encode')
)->request()->getResult();

print_r($ret);
print_r($ret->getStatusCode());
print_r($ret->getDeviceId());
