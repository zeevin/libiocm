<?php
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Query\Request();
$request->setAppId($iotConfig['appId'])->setStartTime(new DateTime('20180401'))->setPageNo(1);

/** @var \Zeevin\Libiocm\Cmd\QueryClient $app1 */
$app1 = $app['cmd.query'];
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Response $ret */
$ret =  $app1->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);



