<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:20
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Query;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 当删除授权应用下的设备组时需要填写，填 写授权应用的应用 ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("accessAppId")
     * @JMS\Type("string")
     */
    protected $accessAppId;
    /**
     * 分页查询参数。
     *  值为空时，查询内容不分页。
     *  值为大于等于0的整数时，分页查询。  值为0时查询第一页
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageNo")
     * @JMS\Type("integer")
     */
    protected $pageNo;
    /**
     * 每页设备组记录数量，默认值为 1
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("pageSize")
     * @JMS\Type("integer")
     */
    protected $pageSize;
    /**
     * 设备组名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getAccessAppId()
    {
        return $this->accessAppId;
    }

    /**
     * @param $accessAppId
     *
     * @return $this
     */
    public function setAccessAppId($accessAppId)
    {
        $this->accessAppId = $accessAppId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * @param $pageNo
     *
     * @return $this
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

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


}