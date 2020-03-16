<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:53
 * Source: ServiceCommandPara.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceCapabilities\QueryCapabilities\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ServiceCommandPara
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("paraName")
     * @JMS\Type("string")
     */
    protected $paraName;
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

    /**
     * @return mixed
     */
    public function getParaName()
    {
        return $this->paraName;
    }

    /**
     * @return mixed
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * @return mixed
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * @return mixed
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return mixed
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @return mixed
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @return mixed
     */
    public function getEnumList()
    {
        return $this->enumList;
    }
}
