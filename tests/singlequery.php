<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request();
$request->setAppId($iotConfig['appId'])->setSelect('imsi');
/** @var \Zeevin\Libiocm\Dm\SingleQueryClient $single ] */
$single = $app['dm.singleQuery'];
$device_id = '2f41a999-3031-41bf-8aeb-a4d27eb9b547';
/** @var \Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request $ret */
$ret = $single->setUrlExtend($device_id)->setUrlParams(
    $request->serialize('form-url-encode')
)->request()->getResult();
print_r($ret);
