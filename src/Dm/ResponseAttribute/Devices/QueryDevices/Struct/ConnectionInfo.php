<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午5:29
 * Source: ConnectionInfo.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class ConnectionInfo
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("protocolType")
     * @JMS\Type("string")
     */
    protected $protocolType;

}