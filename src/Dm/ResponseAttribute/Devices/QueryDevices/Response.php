<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午3:09
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("totalCount")
     * @JMS\Type("integer")
     */
    protected $totalCount;
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
     * @SerializedName("devices")
     * @JMS\Type("array<Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct\GetDeviceRspDTO>")
     */
    protected $devices;

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
    public function getDevices()
    {
        return $this->devices;
    }




}