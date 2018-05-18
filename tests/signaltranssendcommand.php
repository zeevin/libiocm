<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午5:21
 * Source: signaltranssendcommand.php
 * Project: libiocm
 */

require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request
    = new \Zeevin\Libiocm\Signaltrans\RequestAttribute\Devices\SendCommand\Request(
);
$device_id = '2f41a999-3031-41bf-8aeb-a4d27eb9b547';
$random = bin2hex(random_bytes(4));
$request->setDeviceId($device_id)->setServiceId('WorkStatusCommon');
$request->getHeader()->setMode('NOACK')->setMethod('WORK_COMMOND');
$request->setBody(['head' => 0xaa, 'end' => 0x55]);

/** @var \Zeevin\Libiocm\Signaltrans\SendCommandClient $app1 */
$app1 = $app['signaltrans.sendCommand'];
//print_r($request->serialize());exit;

$ret = $app1->setUrlExtend(
    $request->getDeviceId(),
    'services',
    $request->getServiceId(),
    'sendCommand'
)->setUrlParams(http_build_query(['appid' => $iotConfig['appId']]))->request(
    $request->serialize()
)->getResult();
print_r($ret);

