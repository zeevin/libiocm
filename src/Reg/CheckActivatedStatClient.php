<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 上午10:43
 * Source: CheckActivatedStatClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg;

use Zeevin\Libiocm\Reg\ResponseAttribute\DeviceCredentials\CheckActivatedStat\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class CheckActivatedStatClient
 * @package Zeevin\Libiocm\Reg
 * @method Response getResult($format = 'object')
 */
class CheckActivatedStatClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'reg';
    protected $prefix = 'deviceCredentials';
    protected $method = 'GET';
    protected $id = 'checkActivatedStat';

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
