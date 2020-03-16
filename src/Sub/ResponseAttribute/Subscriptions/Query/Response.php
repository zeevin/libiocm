<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/16
 * Time: 下午10:41
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\ResponseAttribute\Subscriptions\Query;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 订阅 ID 号，用于标识一个订阅。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("subscriptionId")
     * @JMS\Type("string")
     */
    protected $subscriptionId;
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
     * @return mixed
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @return mixed
     */
    public function getNotifyType()
    {
        return $this->notifyType;
    }

    /**
     * @return mixed
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }
}
