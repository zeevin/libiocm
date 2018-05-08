<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午4:16
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sec\RequestAttribute\RefreshToken;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseAttribute;

class Request extends BaseAttribute
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
     * 刷新令牌，用于获取一个新的accessToken
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refreshToken")
     * @JMS\Type("string")
     */
    protected $refreshToken;

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
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
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
     * @param $secret
     *
     * @return $this
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }

    /**
     * @param $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
        return $this;
    }
}