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
}