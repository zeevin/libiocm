<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: queryspecificdevgroups.php
 * Project: libiocm
 */

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\SpecificQuery\Request();
//$request->setAccessAppId('xxx');
$devGroupId = 'ec427649-bbc3-484d-a483-caa677e0d055';
/** @var \Zeevin\Libiocm\Devgroup\SpecificQueryClient$app1 */
$app1 = $app['devgroups.query.specific'];
//print_r($request->serialize('form-url-encode'));exit;
/** @var \Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\SpecificQuery\Response $ret */
$ret =  $app1->setUrlExtend($devGroupId)->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
