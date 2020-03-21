<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午3:22
 * Source: QueryTaskClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd;

use Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\QueryTask\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class QueryTaskClient
 * @package Zeevin\Libiocm\Cmd
 * @method Response getResult($format = 'object')
 */
class QueryTaskClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.4.0';
    protected $domain = 'cmd';
    protected $prefix = 'deviceCommandCancelTasks';
    protected $method = 'GET';
    protected $id = 'queryTask';

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
