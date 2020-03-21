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
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Create\Request();
$request->setAppId($iotConfig['appId'])->setName('test_group991')->setDescription('test99');
//print_r($request->serialize());exit;
$ret = $app->devGroupsCreate->request($request->serialize())->getResult();
print_r($ret);
