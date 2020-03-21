<?php

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update\Request();
$deviceCommandId = 'idtest1';
$request->getBody()->setStatus('CANCELED');

//print_r($request->serialize());exit;
$ret = $app->cmdUpdate->setUrlExtend($deviceCommandId)->request()->getResult();
print_r($ret);
