<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午8:48
 * Source: Request.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create;

use JMS\Serializer\Annotation as JMS;
use Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create\Struct\PostDeviceCommandReq;
use Zeevin\Libiocm\Core\BaseRequestAttribute;

class Request extends BaseRequestAttribute
{
    protected $appId;
    /**
     * @var PostDeviceCommandReq
     * @JMS\Inline
     * @JMS\XmlElement(cdata=false)
     * @JMS\Type("Zeevin\Libiocm\Cmd\RequestAttribute\DeviceCommands\Create\Struct\PostDeviceCommandReq")
     */
    protected $body;

    /**
     * @return PostDeviceCommandReq
     */
    public function getBody(): PostDeviceCommandReq
    {
        ($this->body instanceof PostDeviceCommandReq) || $this->body = new PostDeviceCommandReq();

        return $this->body;
    }
}
