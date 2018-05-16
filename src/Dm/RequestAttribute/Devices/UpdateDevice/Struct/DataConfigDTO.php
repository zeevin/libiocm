<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午10:03
 * Source: DataConfigDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DataConfigDTO
{
    /**
     * 数据老化时长配置，取值：090，单位：天
     * 可选
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("dataAgingTime")
     * @JMS\Type("DateTime<'Ymd\THis\Z'>")
     */
    protected $dataAgingTime;

    /**
     * @return mixed
     */
    public function getDataAgingTime()
    {
        return $this->dataAgingTime;
    }

    /**
     * @param mixed $dataAgingTime
     */
    public function setDataAgingTime($dataAgingTime)
    {
        $this->dataAgingTime = $dataAgingTime;
    }



}