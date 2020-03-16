<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 上午11:18
 * Source: DeviceCommandQueryResp.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait DeviceCommandQueryResp
{
    /**
     * @var \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\Pagination
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pagination")
     * @JMS\Type("Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\Pagination")
     */
    protected $pagination;
    /**
     * @var \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("data")
     * @JMS\Type("array<Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp>")
     */
    protected $data;

    /**
     * @return \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\Pagination
     */
    public function getPagination(
    ): \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\Pagination {
        return $this->pagination;
    }

    /**
     * @return \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp
     */
    public function getData(
    ): \Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Struct\DeviceCommandResp {
        return $this->data;
    }
}
