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
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\Reg\Request();
$request->setAppId($iotConfig['appId'])
    ->setNotifyType('messageConfirm')
    ->setCallbackUrl('https://nbapi.init.com:443/nbNotify');

$ret = $app->subReg->setUrlParams(http_build_query(['ownerFlag'=>'false']))->request($request->serialize())->getResult();
print_r($ret);