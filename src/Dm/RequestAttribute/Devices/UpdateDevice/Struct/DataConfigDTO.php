<?php
/**
 * @link   https://www.init.lu
 *
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
     * 可选.
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("dataAgingTime")
     * @JMS\Type("integer")
     */
    protected $dataAgingTime;

    /**
     * @return mixed
     */
    public function getDataAgingTime(): int
    {
        return $this->dataAgingTime;
    }

    /**
     * @param $dataAgingTime
     *
     * @return $this
     */
    public function setDataAgingTime($dataAgingTime)
    {
        $this->dataAgingTime = $dataAgingTime;

        return $this;
    }
}
