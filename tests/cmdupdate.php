<?php

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update\Request();
$deviceCommandId = 'idtest1';
$request->getBody()->setStatus('CANCELED');

/** @var \Zeevin\Libiocm\Cmd\UpdateClient $app1 */
$app1 = $app['cmd.update'];
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Update\Response $ret */
$ret = $app1->setUrlExtend($deviceCommandId)->request()->getResult();
print_r($ret);
