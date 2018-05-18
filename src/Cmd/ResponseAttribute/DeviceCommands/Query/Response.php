<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 上午11:17
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query;

use Zeevin\Libiocm\Core\BaseResponseAttribute;
use Zeevin\Libiocm\Core\Traits\DeviceCommandQueryResp;

class Response extends BaseResponseAttribute
{
    use DeviceCommandQueryResp;
}