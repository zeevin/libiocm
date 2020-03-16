<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午2:26
 * Source: CreateDeviceCommandCancelTaskReq.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\CreateTask\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class CreateDeviceCommandCancelTaskReq
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param mixed $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }
}
