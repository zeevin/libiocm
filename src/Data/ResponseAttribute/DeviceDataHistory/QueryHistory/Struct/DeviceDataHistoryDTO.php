<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午5:58
 * Source: DeviceDataHistoryDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceDataHistory\QueryHistory\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceDataHistoryDTO
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceId")
     * @JMS\Type("string")
     */
    protected $serviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("gatewayId")
     * @JMS\Type("string")
     */
    protected $gatewayId;
    /**
     * 应用唯一标识
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 应用唯一标识
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("data")
     * @JMS\Type("array")
     */
    protected $data;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timestamp")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $timestamp;
}