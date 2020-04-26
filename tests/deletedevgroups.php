<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:14
 * Source: createdevgroups.php
 * Project: libiocm
 */
require '../vendor/autoload.php';
$config = require './config.php';
$app = new Zeevin\Libiocm\Application($config);


$request = new Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Delete\Request();

$devGroupId = 'a7a20762-0d63-4b83-9dc5-a0a0b5cf57be';

$ret = $app->devGroupsDelete->setUrlExtend($devGroupId)->request($request->serialize('form-url-encode'))->getResult();
print_r($ret);
