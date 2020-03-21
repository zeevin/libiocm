<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:55
 * Source: RegClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Sub\ResponseAttribute\Subscriptions\Reg\Response;

/**
 * Class RegClient
 * @package Zeevin\Libiocm\Sub
 * @method Response getResult($format = 'object')
 */
class RegClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'sub';
    protected $prefix = 'subscriptions';
    protected $method = 'POST';
    protected $id = 'reg';

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
