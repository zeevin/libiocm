<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/16
 * Time: 下午7:54
 * Source: batchtaskcreate.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Request();

$request->setAppId($iotConfig['appId'])->setTimeout(100)->setTaskName('name_'.time())
    ->setTaskType('DeviceReg');
$param  = $request->getParam()->setFileId('9912122');


//$request->setAppId($iotConfig['appId'])->setTimeout(100)->setTaskName('name_'.time())
//    ->setTaskType('DeviceCmd');
//$param  = $request->getParam()->setType('DeviceType')->setDeviceType('washer')
//->getCommand()->setServiceId('aa')->setMethod('ww');

/** @var \Zeevin\Libiocm\Cmd\CreateTaskClient $app1 */
$app1 = $app['batchtask.create'];
//print_r($param);exit;
//print_r($request->serialize());exit;
//print_r($param);exit;
/** @var Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\CreateTask\Response $ret */
$ret =  $app1->request($request->serialize())->getResult();
print_r($ret);


