<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:33
 * Source: DeviceCapabilityDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceCapabilityDTO
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * @var ServiceCapabilityDTO
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceCapabilities")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceCapabilityDTO>")
     */
    protected $serviceCapabilities;

}