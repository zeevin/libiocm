<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:08
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\Update;


use Zeevin\Libiocm\Core\BaseResponseAttribute;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class Response extends BaseResponseAttribute
{
    /**
     * 设备组名称，仅限大小写字母和数字
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * 设备组名称，仅限大小写字母和数字
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("description")
     * @JMS\Type("string")
     */
    protected $description;
    /**
     * 设备组 ID，由平台自动生成
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("id")
     * @JMS\Type("string")
     */
    protected $id;
    /**
     * 应用唯一标识
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 设备组设备最大数量，默认最小值 为 0。当值为 0 时，表示对设备数 量不做限制
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxDevNum")
     * @JMS\Type("integer")
     */
    protected $maxDevNum;
    /**
     * 当前设备组内的设备数量
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("curDevNum")
     * @JMS\Type("integer")
     */
    protected $curDevNum;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @return mixed
     */
    public function getMaxDevNum()
    {
        return $this->maxDevNum;
    }

    /**
     * @return mixed
     */
    public function getCurDevNum()
    {
        return $this->curDevNum;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}