<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: deletespecificmember.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);

$request = new Zeevin\Libiocm\Dm\RequestAttribute\Devices\SpecificMemberDelete\Request();
$request->setDevGroupId('c10ff557-f236-4daa-adb6-3e46a2fbc288')->setDeviceIds(['9ad51394-0bda-4c24-9e15-a22bbc73134a']);

$accessAppId = 'xxxx';
//print_r($request->serialize());exit;
$ret = $app->dmDeleteDevgroupSpecificMember->request($request)->getResult();
print_r($ret);
