<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午9:16
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SpecificMemberQuery;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;
use Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\Query\Struct\QueryDevGroupDTOCloud2NA;

class Response extends BaseResponseAttribute
{
    /**
     * 设备组总数
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCount")
     * @JMS\Type("integer")
     */
    protected $totalCount;
    /**
     * 查询结果页码
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;

    /**
     * 每页设备组记录数量
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;

    /**
     * @var QueryDevGroupDTOCloud2NA
     * 设备组信息详情，具体参见
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceIds")
     * @JMS\Type("array<string>")
     */
    protected $deviceIds;

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
    public function getList()
    {
        return $this->list;
    }

}