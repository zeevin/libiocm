<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:39
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg\ResponseAttribute\DeviceCredentials\CheckActivatedStat;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

/**
 * Class Response
 * @package Zeevin\Libiocm\Reg\ResponseAttribute\Devices\CheckActivatedStat
 */
class Response extends BaseResponseAttribute
{
    /**
     * 设备唯一标识，1-64个字节
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("deviceId")
     * @JMS\Type("string")
     */
    protected $deviceId;

    /**
     * 是否通过验证码获取密码的状态标识 ,true:已激活;false:未激活
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("activated")
     * @JMS\Type("boolean")
     */
    protected $activated;

    /**
     * 设备名称
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("name")
     * @JMS\Type("string")
     */
    protected $name;

    /**
     * @return mixed
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @return mixed
     */
    public function getActivated()
    {
        return $this->activated;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}