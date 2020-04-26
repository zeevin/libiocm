<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: createdevgroups.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Create\Request();
$request->setAppId($iotConfig['appId'])->setName('test_group991')->setDescription('test99');

$ret = $app->devGroupsCreate->request($request)->getResult();
print_r($ret);
