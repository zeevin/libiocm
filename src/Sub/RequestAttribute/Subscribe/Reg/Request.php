<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:49
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\RequestAttribute\Subscribe\Reg;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{

    /**
     * 通知类型
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("notifyType")
     * @JMS\Type("string")
     */
    protected $notifyType;
    /**
     * 回调的url
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackurl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;

    /**
     * @return mixed
     */
    public function getNotifyType()
    {
        return $this->notifyType;
    }

    /**
     * @param $notifyType
     *
     * @return $this
     */
    public function setNotifyType($notifyType)
    {
        $this->notifyType = $notifyType;
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