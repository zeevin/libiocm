<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午9:58
 * Source: DeviceConfigDTO.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

class DeviceConfigDTO
{
    /**
     * 数据配置信息，自定义结构体.
     *
     * @var DataConfigDTO
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("dataConfig")
     * @JMS\Type("Zeevin\Libiocm\Dm\RequestAttribute\Devices\UpdateDevice\Struct\DataConfigDTO")
     */
    protected $dataConfig;

    /**
     * @return DataConfigDTO
     */
    public function getDataConfig(): DataConfigDTO
    {
        ($this->dataConfig instanceof DataConfigDTO) || $this->dataConfig = new DataConfigDTO();

        return $this->dataConfig;
    }
}
