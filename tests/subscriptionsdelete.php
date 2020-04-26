<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:57
 * Source: subscriptionsdelete.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\Delete\Request();
$request->setAppId($iotConfig['appId']);

$subscriptionId = '97214871-d975-4fb7-a4bc-8dea93b4dad8';
//print_r($request->serialize());exit;
$ret = $app->subDelete->setUrlExtend($subscriptionId)->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);

//通知数据示例：{"notifyType":"deviceDeleted","deviceId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2","gatewayId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2"}
