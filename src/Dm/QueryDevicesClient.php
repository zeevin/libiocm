<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午3:18
 * Source: QueryDevicesClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Dm\ResponseAttribute\Devices\QueryDevices\Response;

/**
 * Class QueryDevicesClient
 * @method Response getResult($format = 'object')
 *
 * @package Zeevin\Libiocm\Dm
 */
class QueryDevicesClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.3.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'GET';
    protected $id = 'queryDevices';

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
