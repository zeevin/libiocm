<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:02
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Create;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 设备组名称，仅限大小写字母和数字.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * 设备组名称，仅限大小写字母和数字.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("description")
     * @JMS\Type("string")
     */
    protected $description;
    /**
     * 应用唯一标识.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 设备组设备最大数量，默认最小值 为 0。当值为 0 时，表示对设备数 量不做限制.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxDevNum")
     * @JMS\Type("integer")
     */
    protected $maxDevNum;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxDevNum()
    {
        return $this->maxDevNum;
    }

    /**
     * @param $maxDevNum
     *
     * @return $this
     */
    public function setMaxDevNum($maxDevNum)
    {
        $this->maxDevNum = $maxDevNum;

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
