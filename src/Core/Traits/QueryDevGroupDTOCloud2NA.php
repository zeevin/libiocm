<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:27
 * Source: QueryDevGroupDTOCloud2NA.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait QueryDevGroupDTOCloud2NA
{
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("description")
     * @JMS\Type("string")
     */
    protected $description;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("id")
     * @JMS\Type("string")
     */
    protected $id;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("maxDevNum")
     * @JMS\Type("integer")
     */
    protected $maxDevNum;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("curDevNum")
     * @JMS\Type("integer")
     */
    protected $curDevNum;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("creator")
     * @JMS\Type("string")
     */
    protected $creator;

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
    public function getId()
    {
        return $this->id;
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
    public function getCreator()
    {
        return $this->creator;
    }


}