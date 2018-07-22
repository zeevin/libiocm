<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午11:50
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub\RequestAttribute\Subscriptions\BatchQuery;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 设备所属的 appId。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 通知类型，第三方应用可以根据通知类
     * 型对消息分别进行处理。
     * 1. deviceAdded(添加新设备)
     * 2. deviceInfoChanged(设备信息变化)
     * 3. deviceDataChanged(设备数据变
     * 化)
     * 4. deviceDatasChanged(设备数据批量 变化)
     * 5. deviceDeleted(删除设备)
     * 6. messageConfirm(消息确认)
     * 7. commandRsp(命令响应)
     * 8. deviceEvent(设备事件)
     * 9. serviceInfoChanged(服务信息变
     * 化)
     * 10. ruleEvent(规则事件)
     * 11. deviceModelAdded(添加设备模型)
     * 12. deviceModelDeleted(删除设备模 型)
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("notifyType")
     * @JMS\Type("string")
     */
    protected $notifyType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;

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
     * @return int
     */
    public function getPageNo() :int
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     *
     * @return $this
     */
    public function setPageNo(int $pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize() :int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize(int $pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }


}