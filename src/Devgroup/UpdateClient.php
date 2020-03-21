<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午8:11
 * Source: UpdateClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Devgroup;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Devgroup\ResponseAttribute\DevGroups\Update\Response;

/**
 * Class UpdateClient
 * @package Zeevin\Libiocm\Devgroup
 * @method Response getResult($format = 'object')
 */
class UpdateClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.3.0';
    protected $domain = 'devgroup';
    protected $prefix = 'devGroups';
    protected $method = 'PUT';
    protected $id = 'update';

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
