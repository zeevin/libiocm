<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午4:02
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Signaltrans\RequestAttribute\Devices\SendCommand;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;
use Zeevin\Libiocm\Signaltrans\RequestAttribute\Devices\SendCommand\Struct\CommandNA2CloudHeader;

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
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceId")
     * @JMS\Type("string")
     */
    protected $serviceId;
    /**
     * @var CommandNA2CloudHeader
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("header")
     * @JMS\Type("Zeevin\Libiocm\Signaltrans\RequestAttribute\Devices\SendCommand\Struct\CommandNA2CloudHeader")
     */
    protected $header;
    /**
     * @var array
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("body")
     * @JMS\Type("array<string,string>")
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
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
        return $this;
    }

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
     * @return CommandNA2CloudHeader
     */
    public function getHeader(): CommandNA2CloudHeader
    {
        $this->header instanceof CommandNA2CloudHeader || $this->header = new CommandNA2CloudHeader();
        return $this->header;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param array $body
     *
     * @return $this
     */
    public function setBody(array $body)
    {
        $this->body = $body;
        return $this;
    }





}

