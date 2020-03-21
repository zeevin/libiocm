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

use Zeevin\Libiocm\BatchTask\ResponseAttribute\TaskDetails\Query\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class QueryDetailClient
 * @package Zeevin\Libiocm\BatchTask
 * @method Response getResult($format = 'object')
 */
class QueryDetailClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'batchtask';
    protected $prefix = 'taskDetails';
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
