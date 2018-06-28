<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午2:07
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\RefreshKey;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

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
     * 设备Id
     * 必选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * 验证码：null 平台生成验证码，并返回；非null 使用，且返回该验证码。（大小写不敏感）
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("verifyCode")
     * @JMS\Type("string")
     */
    protected $verifyCode;
    /**
     * null:nodeId不变；非null：更新；网关的唯一ID，平台用于判重
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeId")
     * @JMS\Type("string")
     */
    protected $nodeId;
    /**
     * 验证码超时时间，单位秒。null：默认值(180s)；0：永不过期；非0：指定时间
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeout")
     * @JMS\Type("integer")
     */
    protected $timeout;

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
    public function getVerifyCode()
    {
        return $this->verifyCode;
    }

    /**
     * @param $verifyCode
     *
     * @return $this
     */
    public function setVerifyCode($verifyCode)
    {
        $this->verifyCode = $verifyCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @param $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout() :int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     *
     * @return $this
     */
    public function setTimeout(int $timeout)
    {
        $this->timeout = $timeout;
        return $this;
    }




}