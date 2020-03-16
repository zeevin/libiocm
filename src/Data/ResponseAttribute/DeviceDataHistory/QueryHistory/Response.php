<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午5:56
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data\ResponseAttribute\DeviceDataHistory\QueryHistory;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCount")
     * @JMS\Type("integer")
     */
    protected $totalCount;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceDataHistoryDTOs")
     * @JMS\Type("array<Zeevin\Libiocm\Data\ResponseAttribute\DeviceDataHistory\QueryHistory\Struct\DeviceDataHistoryDTO>")
     */
    protected $deviceDataHistoryDTOs;

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
    public function getPageSize()
    {
        return $this->pageSize;
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
    public function getList()
    {
        return $this->list;
    }
}
