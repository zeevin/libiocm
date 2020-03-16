<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/25
 * Time: 下午3:16
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\BatchDelete;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 用户名，应填写应用程序ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 通知类型，第三方应用可以根据通知
     * 类型对消息分别进行处理。
     * 1. deviceAdded(添加新设备)
     * 2. deviceInfoChanged(设备信息变化)
     * 3. deviceDataChanged(设备数据变化)
     * 4. deviceDatasChanged(设备数据批量变化)
     * 5. deviceDeleted(删除设备)
     * 6. messageConfirm(消息确认)
     * 7. commandRsp(命令响应)
     * 8. deviceEvent(设备事件)
     * 9. serviceInfoChanged(服务信息变化)
     * 10. ruleEvent(规则事件)
     * 11. deviceModelAdded(添加设备模型)
     * 12. deviceModelDeleted(删除设备模型).
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("notifyType")
     * @JMS\Type("string")
     */
    protected $notifyType;
    /**
     * 订阅回调的 URL 地址。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("callbackUrl")
     * @JMS\Type("string")
     */
    protected $callbackUrl;

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
