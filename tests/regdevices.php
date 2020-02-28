<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午8:59
 * Source: regdevices.php
 * Project: libiocm
 */

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\Reg\Request();
$random = 'TEST_'.bin2hex(random_bytes(6));
//var_dump($random);
$request->setNodeId($random)->setTimeout(0)->setVerifyCode($random);

$ret = $app['reg.reg']->request($request->serialize())->getResult();
print_r($ret);
