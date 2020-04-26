<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午3:01
 * Source: seclogin.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
use Zeevin\Libiocm\Sec\RequestAttribute as NbRequest;

$app = new Zeevin\Libiocm\Application($config);
$iotConfig = $app['config']->get('iot');
$cacheConfig = $app['config']->get('cache');

$request = new NbRequest\Login\Request();
$request->setAppId($iotConfig['appId'])->setSecret($iotConfig['secret']);
$ret = $app->secLogin->request($request->serialize('form-url-encode'))->getResult();
//echo $ret;exit;
print_r($ret);
$app['cache']->save($cacheConfig['oauth_key'], $ret, $ret->getExpiresIn() - 600);
$app['cache']->save($cacheConfig['oauth_refresh_key'], $ret->getRefreshToken().':'.$ret->getAccessToken(), 86400 * 28);
