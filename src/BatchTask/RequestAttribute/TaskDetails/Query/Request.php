<?php
/**
 * @link   https://www.saychain.net
 *
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午9:46
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\RequestAttribute\TaskDetails\Query;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 用户名，应填写应用程序ID
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 批量任务的 ID。
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskId")
     * @JMS\Type("string")
     */
    protected $taskId;
    /**
     * 任务的详情状态， Pending/Success/Fail/Timeout.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * 批量任务文件里第几行的任务，查询批量注册任务时使用。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("index")
     * @JMS\Type("integer")
     */
    protected $index;
    /**
     * 设备 nodeId，查询批量注册任务时使用。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("nodeId")
     * @JMS\Type("string")
     */
    protected $nodeId;
    /**
     * 设备 Id，查询批量命令任务时使用。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;
    /**
     * 命令 Id，查询批量命令任务时使用。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("commandId")
     * @JMS\Type("string")
     */
    protected $commandId;
    /**
     * 分页查询参数。
     *  值为空时，查询内容不分页。
     *  值为大于等于0的整数时，分页查询。  值为0时查询第一页。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo = 0;
    /**
     * 分页查询参数，取值大于等于 1 的整数，缺省 值:1。
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize = 1;

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
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * @param $taskId
     *
     * @return $this
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;

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
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @param $index
     *
     * @return $this
     */
    public function setIndex($index)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * @param $nodeId
     *
     * @return $this
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCommandId()
    {
        return $this->commandId;
    }

    /**
     * @param $commandId
     *
     * @return $this
     */
    public function setCommandId($commandId)
    {
        $this->commandId = $commandId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageNo(): int
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
     * @return int
     */
    public function getPageSize(): int
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
}
