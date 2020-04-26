<?php

use Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update\Request;

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);

$request = new Request();
$deviceCommandId = 'idtest1';
$request->getBody()->setStatus('CANCELED');

//print_r($request->serialize());exit;
$ret = $app->cmdUpdate->setUrlExtend($deviceCommandId)->request($request)->getResult();
print_r($ret);
