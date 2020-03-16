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
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Update\Request();
$request->setName('test_group33')->setDescription('test33update')->setMaxDevNum(100);
$devGroupId = '4d76b5fb-5bf0-487a-94c9-537c4fc341f0';
/** @var \Zeevin\Libiocm\Devgroup\UpdateClient $app1 */
$app1 = $app['devgroups.update'];
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\Update\Response $ret */
$ret = $app1->setUrlExtend($devGroupId)->request($request->serialize())->getResult();
print_r($ret);
