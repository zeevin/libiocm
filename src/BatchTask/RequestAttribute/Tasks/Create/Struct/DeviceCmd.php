<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/6/29
 * Time: 下午5:12
 * Source: DeviceCmd.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceCmd
{
    /**
     * 批量命令类型，取值返回：DeviceList、DeviceType、DeviceArea、GroupList、Broadcast.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("type")
     * @JMS\Type("string")
     */
    protected $type;
    /**
     * deviceId 列表，当命令类型为 DeviceList 时，需要填写.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceList")
     * @JMS\Type("array<string>")
     */
    protected $deviceList;
    /**
     * 设备类型，当命令类型为 DeviceType 时，需要填写
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceType")
     * @JMS\Type("string")
     */
    protected $deviceType;
    /**
     * 厂商 ID，当命令类型为 DeviceType 时 可填写，其值应当与 profile 中定义的一 致。
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("manufactureId")
     * @JMS\Type("string")
     */
    protected $manufactureId;
    /**
     * 设备型号，当命令类型为 DeviceType 时 可填写，其值应当与 profile 中定义的一 致。
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("model")
     * @JMS\Type("string")
     */
    protected $model;
    /**
     * 设备位置，当命令类型为 DeviceArea 时 需要填写。
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceLocation")
     * @JMS\Type("string")
     */
    protected $deviceLocation;
    /**
     * deviceId 列表，当命令类型为 DeviceList 时，需要填写
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("groupList")
     * @JMS\Type("array<string>")
     */
    protected $groupList;
    /**
     * 命令，查看 CommandDTOV2 结构体说 明结构定义.
     *
     * @var CommandDTOV2
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("command")
     * @JMS\Type("Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\CommandDTOV2")
     */
    protected $command;
    /**
     * 命令执行结果的回调地址
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackUrl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;
    /**
     * 命令下发最大重传次数，取值范围:0- 3。
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxRetransmit")
     * @JMS\Type("integer")
     */
    protected $maxRetransmit;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }

    /**
     * @param $deviceList
     *
     * @return $this
     */
    public function setDeviceList($deviceList)
    {
        $this->deviceList = $deviceList;

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
    public function getManufactureId()
    {
        return $this->manufactureId;
    }

    /**
     * @param $manufactureId
     *
     * @return $this
     */
    public function setManufactureId($manufactureId)
    {
        $this->manufactureId = $manufactureId;

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
    public function getDeviceLocation()
    {
        return $this->deviceLocation;
    }

    /**
     * @param $deviceLocation
     *
     * @return $this
     */
    public function setDeviceLocation($deviceLocation)
    {
        $this->deviceLocation = $deviceLocation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGroupList()
    {
        return $this->groupList;
    }

    /**
     * @param $groupList
     *
     * @return $this
     */
    public function setGroupList($groupList)
    {
        $this->groupList = $groupList;

        return $this;
    }

    /**
     * @return CommandDTOV2
     */
    public function getCommand(): CommandDTOV2
    {
        $this->command instanceof CommandDTOV2 || $this->command = new CommandDTOV2();

        return $this->command;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxRetransmit()
    {
        return $this->maxRetransmit;
    }

    /**
     * @param $maxRetransmit
     *
     * @return $this
     */
    public function setMaxRetransmit($maxRetransmit)
    {
        $this->maxRetransmit = $maxRetransmit;

        return $this;
    }
}
