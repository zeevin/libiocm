<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 上午11:53
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update\Struct\UpdateDeviceCommandReq;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceCommandId")
     * @JMS\Type("string")
     */
    protected $deviceCommandId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * @JMS\Inline
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("body")
     * @JMS\Type("Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Update\Struct\UpdateDeviceCommandReq")
     */
    protected $body;

    /**
     * @return mixed
     */
    public function getDeviceCommandId()
    {
        return $this->deviceCommandId;
    }

    /**
     * @param mixed $deviceCommandId
     */
    public function setDeviceCommandId($deviceCommandId)
    {
        $this->deviceCommandId = $deviceCommandId;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return UpdateDeviceCommandReq
     */
    public function getBody()
    {
        ($this->body instanceof UpdateDeviceCommandReq) || $this->body = new UpdateDeviceCommandReq();

        return $this->body;
    }
}
