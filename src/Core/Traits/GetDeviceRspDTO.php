<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午6:43
 * Source: GetDeviceRspDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait GetDeviceRspDTO
{
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
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeType")
     * @JMS\Type("string")
     */
    protected $nodeType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("createTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $createTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("lastModifiedTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $lastModifiedTime;
    /**
     * @var \Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct\DeviceInfo
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceInfo")
     * @JMS\Type("Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct\DeviceInfo")
     */
    protected $deviceInfo;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("services")
     * @JMS\Type("array<Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct\DeviceService>")
     */
    protected $services;
    /**
     * @var ConnectionInfo
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("connectionInfo")
     * @JMS\Type("Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct\ConnectionInfo")
     */
    protected $connectionInfo;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("location")
     * @JMS\Type("string")
     */
    protected $location;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("devGroupIds")
     * @JMS\Type("array<string>")
     */
    protected $devGroupIds;

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @return mixed
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * @return mixed
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @return mixed
     */
    public function getCreateTime()
    {
        return $this->createTime;
    }

    /**
     * @return mixed
     */
    public function getLastModifiedTime()
    {
        return $this->lastModifiedTime;
    }

    /**
     * @return DeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->deviceInfo;
    }

    /**
     * @return mixed
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @return ConnectionInfo
     */
    public function getConnectionInfo()
    {
        return $this->connectionInfo;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getDevGroupIds()
    {
        return $this->devGroupIds;
    }

}


