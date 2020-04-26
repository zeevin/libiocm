<?php

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');

$request = new Zeevin\Libiocm\Dm\RequestAttribute\Devices\QueryDevices\Request();
$request->setAppId($iotConfig['appId'])->setPageNo(0);

$ret = $app->dmQueryDevices->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
