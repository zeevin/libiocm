<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午7:45
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg\RequetAttribute\DeviceCredentials\Reg;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

/**
 * Class Request
 *
 * @package Zeevin\Libiocm\DeviceManager\RequetsAttribute\Reg
 */
class Request extends BaseResponseAttribute
{
    /**
     * 用户名，应填写应用程序ID
     *
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 客户端给出verifyCode则返回的就是这个verifyCode，即使用客户端给出的verifyCode。如果不指定，系统自动生成
     *
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("verifyCode")
     * @JMS\Type("string")、
     */
    protected $verifyCode;
    /**
     * 设备唯一标识, 如：MAC或SIM卡号或设备esn号等。与设备对接时，必须与设备上报的nodeId一致。
     * 备注：nodeId和verifyCode需要填写相同的值，如果南向连接SoftRadio的模拟环境，
     * 该值可自行定义，格式为TESTS_XXXXXX。如果是现网环境，该值通常为设备的IMEI号。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeId")
     * @JMS\Type("string")
     */
    protected $nodeId;
    /**
     * 终端用户Id，如手机号码，email地址
     *
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("endUserId")
     * @JMS\Type("string")
     */
    protected $endUserId;
    /**
     * psk码，用于生成设备鉴权参数；如不传入，系统自动生成
     *
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("psk")
     * @JMS\Type("string")
     */
    protected $psk;
    /**
     * 单位秒，不填使用默认值(180s), 填写0则永不过期，非0表示在指定时间内设备进行绑定，超过时间验证码无效
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
     * @return mixed
     */
    public function getEndUserId()
    {
        return $this->endUserId;
    }

    /**
     * @param $endUserId
     *
     * @return $this
     */
    public function setEndUserId($endUserId)
    {
        $this->endUserId = $endUserId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPsk()
    {
        return $this->psk;
    }

    /**
     * @param $psk
     *
     * @return $this
     */
    public function setPsk($psk)
    {
        $this->psk = $psk;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
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