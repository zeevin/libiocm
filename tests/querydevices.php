<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:42
 * Source: checkactivatedstat.php
 * Project: libiocm
 */
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new Zeevin\Libiocm\Dm\RequestAttribute\Devices\QueryDevices\Request();
$request->setAppId($iotConfig['appId'])->setPageNo(1);
//print_r($request->serialize('form-url-encode'));exit;
$ret = $app->dmQueryDevices->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
