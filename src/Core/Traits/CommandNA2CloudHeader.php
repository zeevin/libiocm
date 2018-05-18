<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午4:15
 * Source: CommandNA2CloudHeader.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait CommandNA2CloudHeader
{
    /**
     * 如果填写该requestId，就是用填写的requestId标识一个命令，这里的requestId不能重复，
     * 由发起端APP按照下面的规则保证其唯一性：Generate seqNum：APP生成序列号seqNum，在POST请求BODY中携带，
     * 序列号规则采用：UUID_XXXX，UUID会根据JAVA自带算法生成，每次APP启动后生成一个新的值，后续使用时不变，
     * 直到下次APP重新启动再生成一个新的UUID值，XXXX的取值范围：0001-9999，达到9999后重新从0001开始，如此循环
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("requestId")
     * @JMS\Type("string")
     */
    protected $requestId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("mode")
     * @JMS\Type("string")
     */
    protected $mode;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("from")
     * @JMS\Type("string")
     */
    protected $from;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("toType")
     * @JMS\Type("string")
     */
    protected $toType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("to")
     * @JMS\Type("string")
     */
    protected $to;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("method")
     * @JMS\Type("string")
     */
    protected $method;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackUrl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param $requestId
     *
     * @return $this
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getToType()
    {
        return $this->toType;
    }

    /**
     * @param $toType
     *
     * @return $this
     */
    public function setToType($toType)
    {
        $this->toType = $toType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param $callbackUrl
     *
     * @return $this
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }



}