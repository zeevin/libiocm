<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午5:07
 * Source: secrefresh.php
 * Project: libiocm
 */

require './autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$refreshToken = $app['cache']->fetch($cacheConfig['oauth_refresh_key']);
$tmp = explode(':',$refreshToken);
$request = new \Zeevin\Libiocm\Sec\RequestAttribute\RefreshToken\Request();
$request->setAppId($iotConfig['appId'])->setSecret($iotConfig['secret'])
    ->setRefreshToken($tmp[0]);

//print_r($request->serialize());exit;
$ret = $app['sec.refreshToken']->request($request->serialize())->getResult();

$app['cache']->save($cacheConfig['oauth_key'],$ret,$ret->getExpiresIn()-600);
$app['cache']->save($cacheConfig['oauth_refresh_key'],$ret->getRefreshToken().':'.$ret->getAccessToken(),86400*28);

print_r($ret);