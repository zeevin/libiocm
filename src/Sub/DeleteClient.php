<?php
/**
 * @link   https://www.saychain.net
 *
 * @author Cao Kang(caokang@saychain.net)
 * Date: 2018/7/23
 * Time: 上午12:45
 * Source: DeleteClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Sub\ResponseAttribute\Subscriptions\Delete\Response;

/**
 * Class DeleteClient
 * @method Response getResult($format = 'object')
 *
 * @package Zeevin\Libiocm\Sub
 */
class DeleteClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'sub';
    protected $prefix = 'subscriptions';
    protected $method = 'DELETE';
    protected $id = 'delete';

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
