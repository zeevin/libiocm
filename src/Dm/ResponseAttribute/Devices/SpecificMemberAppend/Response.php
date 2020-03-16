<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午9:49
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\ResponseAttribute\Devices\SpecificMemberAppend;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     * 设备组 ID，在增加设备组后由 IoT 平台 返回获得.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("devGroupId")
     * @JMS\Type("string")
     */
    protected $devGroupId;
    /**
     * 设备组 ID，在增加设备组后由 IoT 平台 返回获得.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceIds")
     * @JMS\Type("array<string>")
     */
    protected $deviceIds;

    /**
     * @return mixed
     */
    public function getDevGroupId()
    {
        return $this->devGroupId;
    }

    /**
     * @return mixed
     */
    public function getDeviceIds()
    {
        return $this->deviceIds;
    }
}
