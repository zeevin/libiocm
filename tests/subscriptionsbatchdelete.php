<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/25
 * Time: 下午3:22
 * Source: subscriptionsbatchdelete.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\BatchDelete\Request();
$request->setAppId($iotConfig['appId']);

$ret = $app->subDeleteBatch->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret->getStatusCode());
