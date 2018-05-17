<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午9:18
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseRequestAttribute;
use Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct\UpdateDeviceInfoReqDTO;

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
     * @var UpdateDeviceInfoReqDTO
     * @SerializedName("request")
     * @JMS\Inline
     * @JMS\Type("Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct\UpdateDeviceInfoReqDTO")
     */
    protected $request;

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
     * @return UpdateDeviceInfoReqDTO
     */
    public function getRequest(): UpdateDeviceInfoReqDTO
    {
        ($this->request instanceof UpdateDeviceInfoReqDTO )||( $this->request = new UpdateDeviceInfoReqDTO());

        return $this->request;
    }


}