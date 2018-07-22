<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/23
 * Time: 上午12:08
 * Source: SubscriptionDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait SubscriptionDTO
{
    /**
     * 订阅ID号
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("subscriptionId")
     * @JMS\Type("string")
     */
    protected $subscriptionId;
    /**
     * 通知类型
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("notifyType")
     * @JMS\Type("string")
     */
    protected $notifyType;
    /**
     * 订阅的回调地址
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