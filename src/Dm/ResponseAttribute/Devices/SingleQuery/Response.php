<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午6:03
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SingleQuery;

use Zeevin\Libiocm\Core\BaseResponseAttribute;
use Zeevin\Libiocm\Core\Traits\GetDeviceRspDTO;


/**
 * Class Response
 * @package Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SingleQuery
 */
class Response extends BaseResponseAttribute
{
    use GetDeviceRspDTO;

}
