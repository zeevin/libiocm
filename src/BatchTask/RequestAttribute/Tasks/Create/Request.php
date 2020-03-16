<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/6/29
 * Time: 上午11:53
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\DeviceCmd;
use Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct\DeviceReg;
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
     * 任务超时时长，单位秒，范围为 10 到 2880
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("timeout")
     * @JMS\Type("integer")
     */
    protected $timeout;
    /**
     * 任务名称，最大长度 256 字符。
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskName")
     * @JMS\Type("string")
     */
    protected $taskName;
    /**
     * 任务类型，DeviceReg/DeviceCmd
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskType")
     * @JMS\Type("string")
     */
    protected $taskType;
    /**
     * 任务详细参数，根据 taskType 任务类型的不同 对应不同类型参数
     * 必选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("param")
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
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param $timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * @param $taskName
     *
     * @return $this
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaskType()
    {
        return $this->taskType;
    }

    /**
     * @param $taskType
     *
     * @return $this
     */
    public function setTaskType($taskType)
    {
        $this->taskType = $taskType;

        return $this;
    }

    /**
     * @return DeviceCmd|DeviceReg|Param
     */
    public function getParam()
    {
        if (($this->param instanceof DeviceReg) || ($this->param instanceof DeviceCmd)) {
            return $this->param;
        }

        if ($this->taskType == 'DeviceCmd') {
            $this->param = new DeviceCmd();
        } else {
            $this->param = new DeviceReg();
        }

        return $this->param;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param $tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
