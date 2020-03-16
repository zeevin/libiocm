<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午9:22
 * Source: CommandDTOV4.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait CommandDTOV4
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceId")
     * @JMS\Type("string")
     */
    protected $serviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("method")
     * @JMS\Type("string")
     */
    protected $method;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("paras")
     * @JMS\Type("array<string,string>")
     */
    protected $paras;

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->serviceId;
    }

    /**
     * @param $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getParas()
    {
        return $this->paras;
    }

    /**
     * @param $paras
     *
     * @return $this
     */
    public function setParas($paras)
    {
        $this->paras = $paras;

        return $this;
    }
}
