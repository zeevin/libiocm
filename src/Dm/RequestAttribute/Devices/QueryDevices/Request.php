<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午2:49
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\QueryDevices;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 应用唯一标识
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("gatewayId")
     * @JMS\Type("string")
     */
    protected $gatewayId;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeType")
     * @JMS\Type("string")
     */
    protected $nodeType;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceType")
     * @JMS\Type("string")
     */
    protected $deviceType;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocolType")
     * @JMS\Type("string")
     */
    protected $protocolType;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("startTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $startTime;
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("endTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $endTime;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("sort")
     * @JMS\Type("string")
     */
    protected $sort;

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
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * @param $gatewayId
     *
     * @return $this
     */
    public function setGatewayId($gatewayId)
    {
        $this->gatewayId = $gatewayId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNodeType()
    {
        return $this->nodeType;
    }

    /**
     * @param $nodeType
     *
     * @return $this
     */
    public function setNodeType($nodeType)
    {
        $this->nodeType = $nodeType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeviceType()
    {
        return $this->deviceType;
    }

    /**
     * @param $deviceType
     *
     * @return $this
     */
    public function setDeviceType($deviceType)
    {
        $this->deviceType = $deviceType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProtocolType()
    {
        return $this->protocolType;
    }

    /**
     * @param $protocolType
     *
     * @return $this
     */
    public function setProtocolType($protocolType)
    {
        $this->protocolType = $protocolType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param $status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param $startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param $endTime
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param $sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }



}