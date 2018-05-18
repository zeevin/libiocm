<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午2:23
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\CreateTask;

use Zeevin\Libiocm\Core\BaseResponseAttribute;
use Zeevin\Libiocm\Core\Traits\DeviceCommandCancelTaskResp;

class Response extends BaseResponseAttribute
{
    use DeviceCommandCancelTaskResp;
}