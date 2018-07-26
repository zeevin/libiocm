<?php
/**
 * @link   https://www.init.lu
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
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Delete\Request();
/** @var \Zeevin\Libiocm\Devgroup\DeleteClient $app1 */
$app1 = $app['devgroups.delete'];
$devGroupId = 'a7a20762-0d63-4b83-9dc5-a0a0b5cf57be';
//print_r($request->serialize());exit;
/** @var \Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\Delete\Response $ret */
$ret =  $app1->setUrlExtend($devGroupId)->request($request->serialize('form-url-encode'))->getResult();
print_r($ret);
