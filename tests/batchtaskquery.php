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
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Query\Request();

$request->setAppId($iotConfig['appId'])->setSelect('tag');

$taskId = '5e75b0b2c527c80f7cbc26c2';

$ret = $app->batchTaskQuery->setUrlExtend($taskId)->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();

print_r($ret);
