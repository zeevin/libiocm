<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午2:23
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg\ResponseAttribute\Devices\RefreshKey;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 申请的临时验证码，网关可以通过验证码获取id和密码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("verifyCode")
     * @JMS\Type("string")
     */
    protected $verifyCode;
    /**
     * 验证码有效时间，单位秒，网关需要在有效时间内接入平台
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeout")
     * @JMS\Type("integer")
     */
    protected $timeout;

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


}