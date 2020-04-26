<?php

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\Query\Request();

$subscriptionId = 'e1a010da-4823-46e9-ba67-445cf1af48f0';

$ret = $app->subQuery->setUrlExtend($subscriptionId)
    ->setUrlParams(http_build_query(['appid' => $iotConfig['appId']]))
    ->request($request)
    ->getResult();
print_r($ret);
