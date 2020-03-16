<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午5:59
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 应用唯一标识
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 指定查询条件，可选值:imsi
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("select")
     * @JMS\Type("string")
     */
    protected $select;

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
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @param $select
     *
     * @return $this
     */
    public function setSelect($select)
    {
        $this->select = $select;

        return $this;
    }
}
