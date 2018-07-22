<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午9:18
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;
use Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct\DeviceConfigDTO;

class Request extends BaseRequestAttribute
{
    /**
     * 应用唯一标识
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 设备名称
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * 终端用户，若设备为网关，则endUser可选；若设备是通过网关接入的，则endUser必须为null。
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("endUser")
     * @JMS\Type("string")
     */
    protected $endUser;
    /**
     * 表示设备是否处于冻结状态，即是否上报数据（处于冻结状态，则不上报数据），取值有“TRUE”,“FALSE”
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("mute")
     * @JMS\Type("string")
     */
    protected $mute;
    /**
     * 厂商ID
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("manufacturerId")
     * @JMS\Type("string")
     */
    protected $manufacturerId;
    /**
     * 厂商名
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("manufacturerName")
     * @JMS\Type("string")
     */
    protected $manufacturerName;

    /**
     * 设备类型: 大驼峰命名方式
     * MultiSensor
     * ContactSensor
     * Camera
     * Gateway
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceType")
     * @JMS\Type("string")
     */
    protected $deviceType;

    /**
     * 型号
     * z-wave: ProductType + ProductId
     * 16 进制： XXXX-XXXX 补0对齐
     * 如：001A-0A12
     * 其他协议再定
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("model")
     * @JMS\Type("string")
     */
    protected $model;

    /**
     * 设备的位置
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("location")
     * @JMS\Type("string")
     */
    protected $location;

    /**
     * 设备协议类型
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocolType")
     * @JMS\Type("string")
     */
    protected $protocolType;

    /**
     * 设备配置信息，自定义结构体
     * 可选
     * @var DeviceConfigDTO
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceConfig")
     * @JMS\Type("Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct\DeviceConfigDTO")
     */
    protected $deviceConfig;

    /**
     * 设备所在地区
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("region")
     * @JMS\Type("string")
     */
    protected $region;
    /**
     * 设备所属组织
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("organization")
     * @JMS\Type("string")
     */
    protected $organization;
    /**
     * 设备所在时区
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timezone")
     * @JMS\Type("string")
     */
    protected $timezone;

    /**
     * NB-IoT终端IMSI
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("imsi")
     * @JMS\Type("string")
     */
    protected $imsi;


    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndUser()
    {
        return $this->endUser;
    }

    /**
     * @param $endUser
     *
     * @return $this
     */
    public function setEndUser($endUser)
    {
        $this->endUser = $endUser;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMute()
    {
        return $this->mute;
    }

    /**
     * @param $mute
     *
     * @return $this
     */
    public function setMute($mute)
    {
        $this->mute = $mute;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param $manufacturerId
     *
     * @return $this
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManufacturerName()
    {
        return $this->manufacturerName;
    }

    /**
     * @param $manufacturerName
     *
     * @return $this
     */
    public function setManufacturerName($manufacturerName)
    {
        $this->manufacturerName = $manufacturerName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param $model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param $location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtocolType()
    {
        return $this->protocolType;
    }

    /**
     * @param $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        $this->protocolType = $protocolType;
        return $this;
    }

    /**
     * @return DeviceConfigDTO
     */
    public function getDeviceConfig(): DeviceConfigDTO
    {
        ($this->deviceConfig instanceof DeviceConfigDTO) || $this->deviceConfig = new  DeviceConfigDTO();
        return $this->deviceConfig;
    }


    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param $organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param $timezone
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @param $imsi
     *
     * @return $this
     */
    public function setImsi($imsi)
    {
        $this->imsi = $imsi;
        return $this;
    }
}