<?php
/**
 * @link   https://www.saychain.net
 *
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/22
 * Time: 下午3:44
 * Source: QueryClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\BatchTask;

use Zeevin\Libiocm\BatchTask\ResponseAttribute\Tasks\Query\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class QueryClient
 * @method Response getResult($format = 'object')
 *
 * @package Zeevin\Libiocm\BatchTask
 */
class QueryClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'batchtask';
    protected $prefix = 'tasks';
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
