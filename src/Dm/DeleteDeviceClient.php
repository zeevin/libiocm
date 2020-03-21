<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/10
 * Time: 下午4:16
 * Source: DeleteDeviceClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;
use Zeevin\Libiocm\Dm\ResponseAttribute\Devices\DeleteDevice\Response;

/**
 * Class DeleteDeviceClient
 * @package Zeevin\Libiocm\Dm
 * @method Response getResult($format = 'object')
 */
class DeleteDeviceClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.4.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'DELETE';
    protected $id = 'deleteDevice';

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
