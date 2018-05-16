<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午3:17
 * Source: DeviceInfo.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceInfo
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeId")
     * @JMS\Type("string")
     */
    protected $nodId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("description")
     * @JMS\Type("string")
     */
    protected $description;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("manufactureId")
     * @JMS\Type("string")
     */
    protected $manufactureId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("manufacturerName")
     * @JMS\Type("string")
     */
    protected $manufacturerName;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $mac;
    /**
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("string")
     */
    protected $location;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceType")
     * @JMS\Type("string")
     */
    protected $deviceType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("model")
     * @JMS\Type("string")
     */
    protected $model;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("swVersion")
     * @JMS\Type("string")
     */
    protected $swVersion;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fwVersion")
     * @JMS\Type("string")
     */
    protected $fwVersion;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("hwVersion")
     * @JMS\Type("string")
     */
    protected $hwVersion;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocolType")
     * @JMS\Type("string")
     */
    protected $protocolType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("signalStrength")
     * @JMS\Type("string")
     */
    protected $signalStrength;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("bridgeId")
     * @JMS\Type("string")
     */
    protected $bridgeId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("supportedSecurity")
     * @JMS\Type("string")
     */
    protected $supportedSecurity;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("isSecurity")
     * @JMS\Type("string")
     */
    protected $isSecurity;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sigVersion")
     * @JMS\Type("string")
     */
    protected $sigVersion;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("runningStatus")
     * @JMS\Type("string")
     */
    protected $runningStatus;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("statusDetail")
     * @JMS\Type("string")
     */
    protected $statusDetail;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("mute")
     * @JMS\Type("string")
     */
    protected $mute;

    /**
     * @return mixed
     */
    public function getNodId()
    {
        return $this->nodId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
    public function getManufactureId()
    {
        return $this->manufactureId;
    }

    /**
     * @return mixed
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    /**
     * @return mixed
     */
    public function getMac()
    {
        return $this->mac;
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
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getSwVersion()
    {
        return $this->swVersion;
    }

    /**
     * @return mixed
     */
    public function getFwVersion()
    {
        return $this->fwVersion;
    }

    /**
     * @return mixed
     */
    public function getHwVersion()
    {
        return $this->hwVersion;
    }

    /**
     * @return mixed
     */
    public function getProtocolType()
    {
        return $this->protocolType;
    }

    /**
     * @return mixed
     */
    public function getSignalStrength()
    {
        return $this->signalStrength;
    }

    /**
     * @return mixed
     */
    public function getBridgeId()
    {
        return $this->bridgeId;
    }

    /**
     * @return mixed
     */
    public function getSupportedSecurity()
    {
        return $this->supportedSecurity;
    }

    /**
     * @return mixed
     */
    public function getisSecurity()
    {
        return $this->isSecurity;
    }

    /**
     * @return mixed
     */
    public function getSigVersion()
    {
        return $this->sigVersion;
    }

    /**
     * @return mixed
     */
    public function getRunningStatus()
    {
        return $this->runningStatus;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getStatusDetail()
    {
        return $this->statusDetail;
    }

    /**
     * @return mixed
     */
    public function getMute()
    {
        return $this->mute;
    }



}