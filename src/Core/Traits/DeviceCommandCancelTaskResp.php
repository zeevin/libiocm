<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午2:35
 * Source: DeviceCommandCancelTaskResp.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait DeviceCommandCancelTaskResp
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskId")
     * @JMS\Type("string")
     */
    protected $taskId;
    /**
     * 应用唯一标识
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCount")
     * @JMS\Type("integer")
     */
    protected $totalCount;
    /**
     * @var \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceCommands")
     * @JMS\Type("array<Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp>")
     */
    protected $deviceCommands;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp
     */
    public function getDeviceCommands(
    ): \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp {
        return $this->deviceCommands;
    }
}
