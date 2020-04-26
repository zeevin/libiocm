<?php

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\QueryTask\Request();

$request->setDeviceId('2f41a999-3031-41bf-8aeb-a4d27eb9b547');

$ret = $app->cmdQueryTask->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
