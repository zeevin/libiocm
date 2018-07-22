<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:57
 * Source: subscriptionsreg.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\BatchQuery\Request();
$request->setAppId($iotConfig['appId']);
/** @var \Zeevin\Libiocm\Sub\BatchQueryClient $query */
$query = $app['sub.query.batch'];
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request $ret */
$ret =  $query->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);