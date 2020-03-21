<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午3:18
 * Source: SingleQueryClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Dm\RequestAttribute\Devices\SingleQuery\Request;

/**
 * Class SingleQueryClient.
 *
 * @method  Request getResult($format = 'object')
 */
class SingleQueryClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.4.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'GET';
    protected $id = 'singleQuery';

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
