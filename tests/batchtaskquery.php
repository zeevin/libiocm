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

$request = new Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Query\Request();

$request->setAppId($iotConfig['appId'])->setSelect('tag');

$taskId = '5ea5485eed89c215bb9fff04';

$ret = $app->batchTaskQuery->setUrlExtend($taskId)
    ->setUrlParams($request->serialize('form-url-encode'))
    ->request()
    ->getResult();

print_r($ret);
