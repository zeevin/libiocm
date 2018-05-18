<?php
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\CreateTask\Request();

$request->getBody()->setDeviceId('2f41a999-3031-41bf-8aeb-a4d27eb9b547');

/** @var \Zeevin\Libiocm\Cmd\CreateTaskClient $app1 */
$app1 = $app['cmd.createTask'];
//print_r($request->serialize());exit;
/** @var Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\CreateTask\Response $ret */
$ret =  $app1->request($request->serialize())->getResult();
print_r($ret);



