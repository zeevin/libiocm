<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午4:06
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\DeleteDevice;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 应用唯一标识
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $appId;

    /**
     * 仅在设备是网关，且连接了传感器时有效。取值null或者true删除网关及其下属设备；取值false时删除网关，并将下属传感器属性变为网关属性
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("appId")
     * @JMS\Type("string")
     */
    protected $cascade;

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
    public function getCascade()
    {
        return $this->cascade;
    }

    /**
     * @param $cascade
     *
     * @return $this
     */
    public function setCascade($cascade)
    {
        $this->cascade = $cascade;
        return $this;
    }


}