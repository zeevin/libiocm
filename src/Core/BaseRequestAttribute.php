<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午5:36
 * Source: BaseRequestAttribute.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Core;


abstract class BaseRequestAttribute
{
    public function serialize($format = 'json')
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        if ($format == 'form-url-encode')
        {
            $json = $serializer->serialize($this,'json');
            return http_build_query(json_decode($json,true));
        }
        else
            return $serializer->serialize($this, $format);

    }

}