<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午7:39
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup\RequestAttribute\DevGroups\Delete;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    /**
     * 当删除授权应用下的设备组时需要填写，填 写授权应用的应用 ID.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("accessAppId")
     * @JMS\Type("string")
     */
    protected $accessAppId;

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
}
