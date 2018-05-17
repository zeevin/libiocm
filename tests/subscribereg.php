<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:57
 * Source: subscribereg.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscribe\Reg\Request();
$request->setNotifyType('deviceDeleted')->setCallbackUrl('https://iot.xxx.com:443/callback.php');
/** @var \Zeevin\Libiocm\Sub\RegClient $reg */
$reg = $app['sub.reg'];
/** @var \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request $ret */
$ret = $reg->request($request->serialize())->getResult();
print_r($ret);


//通知数据示例：{"notifyType":"deviceDeleted","deviceId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2","gatewayId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2"}