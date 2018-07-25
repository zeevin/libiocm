<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午8:53
 * Source: PostDeviceCommandReq.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class PostDeviceCommandReq
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * @var CommandDTOV4
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("command")
     * @JMS\Type("Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create\Struct\CommandDTOV4")
     */
    protected $command;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackUrl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expireTime")
     * @JMS\Type("integer")
     */
    protected $expireTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxRetransmit")
     * @JMS\Type("integer")
     */
    protected $maxRetransmit;

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
     * @return CommandDTOV4
     */
    public function getCommand(): CommandDTOV4
    {
        $this->command instanceof CommandDTOV4 || $this->command = new CommandDTOV4();
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
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * @param $expireTime
     *
     * @return $this
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
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