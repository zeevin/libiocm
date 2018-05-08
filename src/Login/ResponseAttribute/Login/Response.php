<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午8:42
 * Source: ResponseAttribute.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Login\ResponseAttribute\Login;


use Zeevin\Libiocm\Core\BaseAttribute as BaseAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;


class Response extends BaseAttribute
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
     * @param mixed $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }

    /**
     * @return mixed
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * @param mixed $tokenType
     */
    public function setTokenType($tokenType)
    {
        $this->tokenType = $tokenType;
    }

    /**
     * @return mixed
     */
    public function getExpiresIn()
    {
        return $this->expiresIn;
    }

    /**
     * @param mixed $expiresIn
     */
    public function setExpiresIn($expiresIn)
    {
        $this->expiresIn = $expiresIn;
    }

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param mixed $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

}