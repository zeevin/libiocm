<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: queryspecificmember.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Dm\RequestAttribute\Devices\SpecificMemberQuery\Request();
$request->setPageNo(0)->setPageSize(10)->setDevGroupId('c10ff557-f236-4daa-adb6-3e46a2fbc288');
/** @var \Zeevin\Libiocm\Dm\SpecificMemberQueryClient $app1 */
$app1 = $app['dm.query.devgroup.specific.member'];
//print_r($request->serialize('form-url-encode'));exit;
/** @var Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SpecificMemberQuery\Response $ret */
$ret =  $app1->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
