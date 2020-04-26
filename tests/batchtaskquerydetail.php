<?php
/**
 * @link   https://www.init.lu
 *
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

$request = new Zeevin\Libiocm\BatchTask\RequestAttribute\TaskDetails\Query\Request();

$taskId = '5b5444dd1cfb5e35fc9a7ef8';

$request->setAppId($iotConfig['appId'])->setTaskId($taskId);

$ret = $app->batchTaskQueryDetail->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();

print_r($ret);
