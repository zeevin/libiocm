<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午2:23
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\CreateTask;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\CreateTask\Struct\CreateDeviceCommandCancelTaskReq;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
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
     * @var CreateDeviceCommandCancelTaskReq
     * @JMS\Inline
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommandCancelTasks\CreateTask\Struct\CreateDeviceCommandCancelTaskReq")
     */
    protected $body;

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
     * @return CreateDeviceCommandCancelTaskReq
     */
    public function getBody(): CreateDeviceCommandCancelTaskReq
    {
        $this->body instanceof CreateDeviceCommandCancelTaskReq || $this->body = new CreateDeviceCommandCancelTaskReq();

        return $this->body;
    }
}
