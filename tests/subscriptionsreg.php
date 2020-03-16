<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:57
 * Source: subscriptionsreg.php
 * Project: libiocm
 */
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\Reg\Request();
$request->setAppId($iotConfig['appId'])->setNotifyType('messageConfirm')->setCallbackUrl('https://nbapi.altabalink.com:443/nbNotify');
/** @var \Zeevin\Libiocm\Sub\RegClient $reg */
$reg = $app['sub.reg'];
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request $ret */
$ret = $reg->setUrlParams(http_build_query(['ownerFlag'=>'false']))->request($request->serialize())->getResult();
print_r($ret);

//通知数据示例：{"notifyType":"deviceDeleted","deviceId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2","gatewayId":"ca3bbf17-b9e7-46b4-82bb-7025507c9bb2"}
