<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午3:43
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Query;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 用户名，应填写应用程序ID
     * 必选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;
    /**
     * 指定可选的返回值，可取值:tag。
     * 可选
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