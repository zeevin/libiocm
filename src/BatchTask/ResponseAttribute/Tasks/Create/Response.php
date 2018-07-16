<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/6/29
 * Time: 下午12:00
 * Source: Response.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask\ResponseAttribute\Tasks\Create;

use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\SerializedName;
use Zeevin\Libiocm\Core\BaseResponseAttribute;

class Response extends BaseResponseAttribute
{
    /**
     *
     * @JMS\XmlElement(cdata=false)
     * @SerializedName("taskID")
     * @JMS\Type("string")
     */
    protected $taskID;

    /**
     * @return mixed
     */
    public function getTaskID()
    {
        return $this->taskID;
    }



}