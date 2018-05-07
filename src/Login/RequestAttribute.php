<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午4:32
 * Source: RequestAttribute.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Login;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseAttribute;


class RequestAttribute extends BaseAttribute
{
    /**
     * 用户名，应填写应用程序ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;

    /**
     * 登录用户口令，填写应用程序密码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("secret")
     * @JMS\Type("string")
     */
    protected $secret;

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
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param $secret
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }
}