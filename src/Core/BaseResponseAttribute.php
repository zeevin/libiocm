<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午5:07
 * Source: BaseAttribute.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class BaseResponseAttribute
{
    /**
     * 响应头信息statusCode.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("statusCode")
     * @JMS\Type("integer")
     */
    protected $statusCode;
    /**
     * 响应头信息reasonPhrase.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("reasonPhrase")
     * @JMS\Type("string")
     */
    protected $reasonPhrase;

    /**
     * body错误码
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("errorCode")
     * @JMS\Type("string")
     */
    protected $errorCode;
    /**
     * body错误描述
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("errorDesc")
     * @JMS\Type("string")
     */
    protected $errorDesc;

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return mixed
     */
    public function getReasonPhrase()
    {
        return $this->reasonPhrase;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return mixed
     */
    public function getErrorDesc()
    {
        return $this->errorDesc;
    }
}
