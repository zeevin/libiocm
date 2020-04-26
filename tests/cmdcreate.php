<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午9:36
 * Source: cmdcreate.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new \Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create\Request();
$device_id = '12b3f9b0-39a9-411b-b2e0-d4ffdace3e09';
$request->getBody()->setDeviceId($device_id)->getCommand()->setServiceId('upstream')
    ->setMethod('command')->setParas(['commandLen'=>8, 'commandData'=>'qgMCBAALy1U=']);

/** @var \Zeevin\Libiocm\Cmd\CreateClient $app1 */
$app1 = $app['cmd.create'];
//print_r($request->serialize());exit;

//此接口有几个异常的代码的请求状态码是404和500，需要单独try catch此类异常，按说只要不是对方服务器执行出问题，都应该用200的状态码返回数据
try {
    $ret = $app1->setUrlParams(http_build_query(['appid'=>$iotConfig['appId']]))->request($request->serialize())->getResult();
    print_r($ret->getStatusCode());
} catch (Exception $e) {
    echo json_encode(['errorcode'=>$e->getCode(), 'errormessage'=>$e->getMessage()]);
}
