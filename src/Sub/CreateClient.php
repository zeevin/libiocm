<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/17
 * Time: 上午11:55
 * Source: CreateClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Sub;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Sub\ResponseAttribute\Subscribe\Create\Response;

/**
 * Class CreateClient.
 *
 * @method Response getResult($format = 'object')
 */
class CreateClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'sub';
    protected $prefix = 'subscribe';
    protected $method = 'POST';
    protected $id = 'create';

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

    public function getResourcePath(): string
    {
        return  'iodm/app';
    }
}
