<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:49
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\Reg;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 通知类型.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("notifyType")
     * @JMS\Type("string")
     */
    protected $notifyType;
    /**
     * 回调的url.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackUrl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;

    /**
     * 设备所属的 appId。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;

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
}
