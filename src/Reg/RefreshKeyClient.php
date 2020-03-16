<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/16
 * Time: 下午2:26
 * Source: RefreshKeyClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Reg;

use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class RefreshKeyClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.1.0';
    protected $domain = 'reg';
    protected $prefix = 'deviceCredentials';
    protected $method = 'PUT';
    protected $id = 'refreshKey';

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
