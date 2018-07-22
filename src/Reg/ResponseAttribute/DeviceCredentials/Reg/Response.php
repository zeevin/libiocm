<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午8:32
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg\ResponseAttribute\DeviceCredentials\Reg;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 单位秒，不填使用默认值(180s), 填写0则永不过期，非0表示在指定时间内设备进行绑定，超过时间验证码无效
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * 申请的临时验证码，设备可以通过验证码获取id和密码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("verifyCode")
     * @JMS\Type("string")
     */
    protected $verifyCode;
    /**
     * 验证码有效时间，单位秒，设备需要在有效时间内接入平台
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeout")
     * @JMS\Type("integer")
     */
    protected $timeout;

    /**
     * psk码，用于生成设备鉴权参数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("psk")
     * @JMS\Type("string")
     */
    protected $psk;

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
    public function getVerifyCode()
    {
        return $this->verifyCode;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @return mixed
     */
    public function getPsk()
    {
        return $this->psk;
    }

}