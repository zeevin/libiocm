<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午3:06
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\QueryTask;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\QueryTask\Struct\Pagination;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * @var Pagination
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pagination")
     * @JMS\Type("Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\QueryTask\Struct\Pagination")
     */
    protected $pagination;

    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("data")
     * @JMS\Type("array<Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\QueryTask\Struct\DeviceCommandCancelTaskResp>")
     */
    protected $data;

    /**
     * @return Pagination
     */
    public function getPagination(): Pagination
    {
        return $this->pagination;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}
