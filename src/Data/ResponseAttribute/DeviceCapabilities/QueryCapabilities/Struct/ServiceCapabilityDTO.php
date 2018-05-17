<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:32
 * Source: ServiceCapabilityDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ServiceCapabilityDTO
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceId")
     * @JMS\Type("string")
     */
    protected $serviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceType")
     * @JMS\Type("string")
     */
    protected $serviceType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("description")
     * @JMS\Type("string")
     */
    protected $description;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("commands")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceCommand>")
     */
    protected $commands;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("properties")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct\ServiceProperty>")
     */
    protected $properties;

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * @return mixed
     */
    public function getProperties()
    {
        return $this->properties;
    }


}