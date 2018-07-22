<?php
/**
 * @link   https://www.saychain.net
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午10:06
 * Source: QueryTaskDetailDTOCloud2NA.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core\Traits;


use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;

trait QueryTaskDetailDTOCloud2NA
{
    /**
     * 任务详情状态，取值范围: Pending/WaitResult/Success/Fail/Timeout
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("status")
     * @JMS\Type("string")
     */
    protected $status;
    /**
     * 批量注册设备、批量下发命令或批量修改设备位置的输出信息
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("output")
     * @JMS\Type("string")
     */
    protected $output;
    /**
     * 任务的错误原因，格式为: {\"error_code\": \"****\", \"error_desc\":\"*****\"}。
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("error")
     * @JMS\Type("string")
     */
    protected $error;
    /**
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("param")
     * @JMS\Type("array<string,string>")
     */
    protected $param;

}