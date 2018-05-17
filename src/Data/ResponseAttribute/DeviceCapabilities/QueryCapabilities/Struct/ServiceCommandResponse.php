<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:53
 * Source: ServiceCommandResponse.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ServiceCommandResponse
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("responseName")
     * @JMS\Type("string")
     */
    protected $responseName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("responseName")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceCommandPara>")
     */
    protected $paras;
}