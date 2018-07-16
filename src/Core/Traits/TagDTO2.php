<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/16
 * Time: 下午9:21
 * Source: TagDTO2.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;


trait TagDTO2
{
    /**
     * 标签名称
     * 必选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tagName")
     * @JMS\Type("string")
     */
    protected $tagName;
    /**
     * 标签值。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("tagValue")
     * @JMS\Type("string")
     */
    protected $tagValue;

    /**
     * @return mixed
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * @param $tagName
     *
     * @return $this
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTagValue()
    {
        return $this->tagValue;
    }

    /**
     * @param $tagValue
     *
     * @return $this
     */
    public function setTagValue($tagValue)
    {
        $this->tagValue = $tagValue;
        return $this;
    }



}