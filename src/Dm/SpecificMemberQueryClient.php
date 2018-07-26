<?php
/**
 * @link   https://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/7/26
 * Time: 下午9:10
 * Source: SpecificMemberQueryClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Dm;


use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

class SpecificMemberQueryClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.2.0';
    protected $domain = 'dm';
    protected $prefix = 'devices';
    protected $method = 'GET';
    protected $id = 'specificMemberQuery';

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
    public function getUrlExtend() :string
    {
       return '/ids';
    }
}