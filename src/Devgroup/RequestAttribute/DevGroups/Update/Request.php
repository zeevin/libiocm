<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:01
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Update;

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
     * 设备组设备最大数量，默认最小值 为 0。当值为 0 时，表示对设备数 量不做限制.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxDevNum")
     * @JMS\Type("integer")
     */
    protected $maxDevNum;

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
}
