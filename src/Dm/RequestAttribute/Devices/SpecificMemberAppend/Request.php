<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午9:46
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\SpecificMemberAppend;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 设备组 ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("devGroupId")
     * @JMS\Type("string")
     */
    protected $devGroupId;

    /**
     * 添加到设备组的设备 ID 列表.
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
     * @param $devGroupId
     *
     * @return $this
     */
    public function setDevGroupId($devGroupId)
    {
        $this->devGroupId = $devGroupId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeviceIds()
    {
        return $this->deviceIds;
    }

    /**
     * @param $deviceIds
     *
     * @return $this
     */
    public function setDeviceIds($deviceIds)
    {
        $this->deviceIds = $deviceIds;

        return $this;
    }
}
