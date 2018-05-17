<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:41
 * Source: ServiceCommand.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ServiceCommand
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("commandName")
     * @JMS\Type("string")
     */
    protected $commandName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("paras")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceCommandPara>")
     */
    protected $paras;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("responses")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceCommandResponse>")
     */
    protected $responses;
}