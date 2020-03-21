<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:25
 * Source: querycapabilities.php
 * Project: libiocm
 */
require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app->config->get('iot');
$cacheConfig = $app->config->get('cache');

$request = new \Zeevin\Libiocm\Data\RequestAttribute\DeviceCapabilities\QueryCapabilities\Request();
$request->setAppId($iotConfig['appId'])->setDeviceId('2f41a999-3031-41bf-8aeb-a4d27eb9b547');


$ret = $app->dataQueryCapabilities->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
