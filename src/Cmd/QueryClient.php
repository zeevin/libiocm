<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 上午11:30
 * Source: QueryClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd;

use Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommands\Query\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class QueryClient.
 *
 * @method Response getResult($format = 'object')
 */
class QueryClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.4.0';
    protected $domain = 'cmd';
    protected $prefix = 'deviceCommands';
    protected $method = 'GET';
    protected $id = 'query';

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
