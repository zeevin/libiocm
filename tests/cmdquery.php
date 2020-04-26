<?php

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Query\Request();
$request->setAppId($iotConfig['appId'])->setStartTime(new DateTime('20180401'))->setPageNo(1);

//print_r($request->serialize());exit;
$ret = $app->cmdQuery->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
