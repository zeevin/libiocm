<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: querydevgroups.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);

$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Query\Request();
$request->setPageNo(0)->setPageSize(10);

$ret = $app->devGroupsQuery->setUrlParams($request->serialize('form-url-encode'))->request()->getResult();
print_r($ret);
