<?php
/**
 * 订阅回调信息页面示例
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午5:31
 * Source: callback.php
 * Project: libiocm
 */
$raw_post_data = file_get_contents('php://input', 'r');
file_put_contents('logs/'.date('Y-m-d').'.log',$raw_post_data."\n",FILE_APPEND);
exit;