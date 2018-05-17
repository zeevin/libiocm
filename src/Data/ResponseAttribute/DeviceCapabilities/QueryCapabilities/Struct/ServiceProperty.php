<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:38
 * Source: ServiceProperty.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ServiceProperty
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("propertyName")
     * @JMS\Type("string")
     */
    protected $propertyName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("dataType")
     * @JMS\Type("string")
     */
    protected $dataType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("required")
     * @JMS\Type("string")
     */
    protected $required;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("min")
     * @JMS\Type("string")
     */
    protected $min;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("max")
     * @JMS\Type("string")
     */
    protected $max;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("step")
     * @JMS\Type("integer")
     */
    protected $step;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxLength")
     * @JMS\Type("integer")
     */
    protected $maxLength;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("method")
     * @JMS\Type("string")
     */
    protected $method;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("unit")
     * @JMS\Type("string")
     */
    protected $unit;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("enumList")
     * @JMS\Type("array")
     */
    protected $enumList;

}