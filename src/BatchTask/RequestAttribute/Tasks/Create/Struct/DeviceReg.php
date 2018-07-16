<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/6/29
 * Time: 下午5:11
 * Source: DeviceReg.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\RequestAttribute\Tasks\Create\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceReg
{
    /**
     * 文件上传时返回的文件ID
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("fieldId")
     * @JMS\Type("string")
     */
    protected $fieldId;

    /**
     * @return mixed
     */
    public function getFieldId()
    {
        return $this->fieldId;
    }

    /**
     * @param $fieldId
     *
     * @return $this
     */
    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
        return $this;
    }


}