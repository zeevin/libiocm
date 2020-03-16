<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午8:42
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sec\ResponseAttribute\Login;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("scope")
     * @JMS\Type("string")
     */
    protected $scope;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tokenType")
     * @JMS\Type("string")
     */
    protected $tokenType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expiresIn")
     * @JMS\Type("integer")
     */
    protected $expiresIn;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("accessToken")
     * @JMS\Type("string")
     */
    protected $accessToken;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("refreshToken")
     * @JMS\Type("string")
     */
    protected $refreshToken;

    /**
     * @return mixed
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return mixed
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }
}
