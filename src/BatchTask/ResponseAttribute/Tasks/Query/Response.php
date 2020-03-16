<?php
/**
 * @link   https://www.saychain.net
 *
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午3:48
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\ResponseAttribute\Tasks\Query;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\DeviceCmd;
use Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\DeviceReg;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 批量任务id.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskId")
     * @JMS\Type("string")
     */
    protected $taskId;
    /**
     * 批量任务名称。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskName")
     * @JMS\Type("string")
     */
    protected $taskName;
    /**
     * 批量任务所归属的 appId.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 下发该批量任务的操作员。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("operator")
     * @JMS\Type("string")
     */
    protected $operator;
    /**
     * 批量任务的来源。
     * Portal:通过SPPortal创建的。
     * Northbound:调用北向API接口创建的。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskFrom")
     * @JMS\Type("string")
     */
    protected $taskFrom;
    /**
     * 批量任务的类型，取值范围:DeviceReg/DeviceCmd.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskType")
     * @JMS\Type("string")
     */
    protected $taskType;
    /**
     * 批量任务的状态，取值范围: Pending/Running/Complete/Timeout。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * 批量任务的创建时间。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("startTime")
     * @JMS\Type("string")
     */
    protected $startTime;
    /**
     * 批量任务的超时时间，单位秒.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeout")
     * @JMS\Type("integer")
     */
    protected $timeout;
    /**
     * 批量任务的进度，单位:千分比，范围:0-1000，向 下取整.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("progress")
     * @JMS\Type("integer")
     */
    protected $progress;
    /**
     * 任务的详情总数。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCnt")
     * @JMS\Type("integer")
     */
    protected $totalCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("successCnt")
     * @JMS\Type("integer")
     */
    protected $successCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("failCnt")
     * @JMS\Type("integer")
     */
    protected $failCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeoutCnt")
     * @JMS\Type("integer")
     */
    protected $timeoutCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("expiredCnt")
     * @JMS\Type("integer")
     */
    protected $expiredCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("completeCnt")
     * @JMS\Type("integer")
     */
    protected $completeCnt;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("successRate")
     * @JMS\Type("integer")
     */
    protected $successRate;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("param")
     * @JMS\Type("array<string,string>")
     */
    protected $param;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tags")
     * @JMS\Type("array<Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\TAGDTO2>")
     */
    protected $tags;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @return mixed
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @return mixed
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @return mixed
     */
    public function getTaskFrom()
    {
        return $this->taskFrom;
    }

    /**
     * @return mixed
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }

    /**
     * @return int
     */
    public function getTotalCnt(): int
    {
        return $this->totalCnt;
    }

    /**
     * @return int
     */
    public function getSuccessCnt(): int
    {
        return $this->successCnt;
    }

    /**
     * @return mixed
     */
    public function getFailCnt(): int
    {
        return $this->failCnt;
    }

    /**
     * @return int
     */
    public function getTimeoutCnt(): int
    {
        return $this->timeoutCnt;
    }

    /**
     * @return int
     */
    public function getExpiredCnt(): int
    {
        return $this->expiredCnt;
    }

    /**
     * @return int
     */
    public function getCompleteCnt(): int
    {
        return $this->completeCnt;
    }

    /**
     * @return int
     */
    public function getSuccessRate(): int
    {
        return $this->successRate;
    }

//    /**
//     * @JMS\VirtualProperty
//     * @JMS\SerializedName("param")
//     */
//    public function setParam()
//    {
//        if ($this->taskType == 'DeviceCmd')
//            return new DeviceCmd();
//        else
//            return new DeviceReg();
//
//    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }
}
