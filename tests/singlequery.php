<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request();
$request->setAppId($iotConfig['appId'])->setSelect('imsi');
/** @var \Zeevin\Libiocm\Dm\SingleQueryClient $single ] */
$single = $app['dm.singleQuery'];
$device_id = '8e7b94d1-c38e-414f-81f2-54ce98ac774c';
/** @var \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request $ret */
$ret = $single->setUrlExtend($device_id)->setUrlParams(
    $request->serialize('form-url-encode')
)->request()->getResult();
print_r($ret);
