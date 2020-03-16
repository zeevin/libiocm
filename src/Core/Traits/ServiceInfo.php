<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/25
 * Time: 下午7:43
 * Source: ServiceInfo.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait ServiceInfo
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("muteCmds")
     * @JMS\Type("array<string>")
     */
    protected $muteCmds;
}
