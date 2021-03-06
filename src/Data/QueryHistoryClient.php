<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 下午6:29
 * Source: DeviceDataHistoryClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Data;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Data\ResponseAttribute\DeviceDataHistory\QueryHistory\Response;

/**
 * Class QueryHistoryClient.
 *
 * @method Response getResult($format = 'object')
 */
class QueryHistoryClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'data';
    protected $prefix = 'deviceDataHistory';
    protected $method = 'GET';
    protected $id = 'queryHistory';

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
