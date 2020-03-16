<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午6:47
 * Source: DeviceService.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait DeviceService
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceId")
     * @JMS\Type("string")
     */
    protected $serviceId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceType")
     * @JMS\Type("string")
     */
    protected $serviceType;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("serviceInfo")
     * @JMS\Type("Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SingleQuery\Struct\ServiceInfo")
     */
    protected $serviceInfo;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("data")
     * @JMS\Type("array")
     */
    protected $data;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("eventTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $eventTime;
}
