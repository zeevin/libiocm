<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: appendspecificmember.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Dm\RequestAttribute\Devices\SpecificMemberAppend\Request();
$request->setDevGroupId('c10ff557-f236-4daa-adb6-3e46a2fbc288')
    ->setDeviceIds(['9ad51394-0bda-4c24-9e15-a22bbc73134a']);

$ret = $app->dmAppendDevgroupSpecificMember->request($request->serialize())->getResult();
print_r($ret);
