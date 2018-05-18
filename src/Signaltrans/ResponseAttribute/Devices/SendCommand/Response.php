<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午4:55
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Signaltrans\ResponseAttribute\Devices\SendCommand;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timestamp")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $timestamp;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("requestId")
     * @JMS\Type("string")
     */
    protected $requestId;

}