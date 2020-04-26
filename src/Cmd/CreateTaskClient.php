<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/18
 * Time: 下午2:41
 * Source: CreateTaskClient.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm\Cmd;

use Zeevin\Libiocm\Cmd\ResponseAttribute\DeviceCommandCancelTasks\CreateTask\Response;
use Zeevin\Libiocm\Core\BaseClient;
use Zeevin\Libiocm\Core\Contracts\ClientInterface;

/**
 * Class CreateTaskClient.
 *
 * @method Response getResult($format = 'object')
 */
class CreateTaskClient extends BaseClient implements ClientInterface
{
    protected $version = 'v1.4.0';
    protected $domain = 'cmd';
    protected $prefix = 'deviceCommandCancelTasks';
    protected $method = 'POST';
    protected $id = 'createTask';

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
