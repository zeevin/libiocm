<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午9:13
 * Source: DeviceCommandResp.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait DeviceCommandResp
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("commandId")
     * @JMS\Type("string")
     */
    protected $commandId;
    /**
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
     * @var CommandDTOV4
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("command")
     * @JMS\Type("Zeevin\Libiocm\Core\Traits\CommandDTOV4")
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
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("result")
     * @JMS\Type("array<string,string>")
     */
    protected $result;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("createTime")
     * @JMS\Type("string")
     */
    protected $createTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("executeTime")
     * @JMS\Type("string")
     */
    protected $executeTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("platformIssuedTime")
     * @JMS\Type("string")
     */
    protected $platformIssuedTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deliveredTime")
     * @JMS\Type("string")
     */
    protected $deliveredTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("issuedTimes")
     * @JMS\Type("integer")
     */
    protected $issuedTimes;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxRetransmit")
     * @JMS\Type("integer")
     */
    protected $maxRetransmit;

    /**
     * @return mixed
     */
    public function getCommandId()
    {
        return $this->commandId;
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
     * @return CommandDTOV4
     */
    public function getCommand(): CommandDTOV4
    {
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
     * @return mixed
     */
    public function getExpireTime()
    {
        return $this->expireTime;
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
    public function getResult()
    {
        return $this->result;
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
    public function getExecuteTime()
    {
        return $this->executeTime;
    }

    /**
     * @return mixed
     */
    public function getPlatformIssuedTime()
    {
        return $this->platformIssuedTime;
    }

    /**
     * @return mixed
     */
    public function getDeliveredTime()
    {
        return $this->deliveredTime;
    }

    /**
     * @return mixed
     */
    public function getIssuedTimes()
    {
        return $this->issuedTimes;
    }

    /**
     * @return mixed
     */
    public function getMaxRetransmit()
    {
        return $this->maxRetransmit;
    }




}