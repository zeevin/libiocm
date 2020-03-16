<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午7:21
 * Source: QueryCapabilitiesClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class QueryCapabilitiesClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'data';
    protected $prefix = 'deviceCapabilities';
    protected $method = 'GET';
    protected $id = 'queryCapabilities';

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
}
