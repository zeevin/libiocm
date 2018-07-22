<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午11:28
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\RequestAttribute\Subscribe\Create;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 通知类型。
     * 1. swUpgradeStateChangeNotify(软件升级 状态变化通知)
     * 2. swUpgradeResultNotify(软件升级结果 通知)
     * 3. fwUpgradeStateChangeNotify(硬件升级 状态变化通知)
     * 4. fwUpgradeResultNotify(硬件升级结果 通知)
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