<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午9:50
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\ResponseAttribute\TaskDetails\Query;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{

    /**
     * 分页查询参数。
     *  值为空时，查询内容不分页。
     *  值为大于等于0的整数时，分页查询。  值为0时查询第一页。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo = 0;
    /**
     * 分页查询参数，取值大于等于 1 的整数，缺省 值:1。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize = 1;
    /**
     * 查询到的任务总数。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCount")
     * @JMS\Type("integer")
     */
    protected $totalCount;
    /**
     * 分页查询参数，取值大于等于 1 的整数，缺省 值:1。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskDetails")
     * @JMS\Type("array<Zeevin\Libiocm\BatchTask\RequestAttribute\TaskDetails\Query\Struct\QueryTaskDetailDTOCloud2NA>")
     */
    protected $taskDetails;

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @return mixed
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * @return mixed
     */
    public function getTaskDetails()
    {
        return $this->taskDetails;
    }



}