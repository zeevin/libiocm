<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:09
 * Source: updatedevgroups.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Update\Request();
$request->setName('test_group33')->setDescription('test33update')->setMaxDevNum(100);
$devGroupId = '4d76b5fb-5bf0-487a-94c9-537c4fc341f0';

$ret = $app->devGroupsUpdate->setUrlExtend($devGroupId)->request($request)->getResult();
print_r($ret);
