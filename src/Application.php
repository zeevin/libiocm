<?php
/**
 * @link   https://www.init.lu
 *
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/7
 * Time: 下午2:36
 * Source: Application.php
 * Project: libiocm
 */

namespace Zeevin\Libiocm;

use Zeevin;
use Zeevin\Libiocm\Core\ServiceContainer;

/**
 * Class Application.
 *
 * @property \Zeevin\Libiocm\Core\Config $config;
 * @property \Doctrine\Common\Cache\CacheProvider $cache;
 * @property \Zeevin\Libiocm\Sec\LoginClient $secLogin;
 * @property \Zeevin\Libiocm\Sec\RefreshTokenClient $secRefreshToken;
 * @property \Zeevin\Libiocm\BatchTask\CreateClient $batchTaskCreate;
 * @property \Zeevin\Libiocm\BatchTask\QueryClient $batchTaskQuery;
 * @property \Zeevin\Libiocm\BatchTask\QueryDetailClient $batchTaskQueryDetail;
 * @property \Zeevin\Libiocm\Cmd\CreateClient $cmdCreate;
 * @property \Zeevin\Libiocm\Cmd\QueryClient $cmdQuery;
 * @property \Zeevin\Libiocm\Cmd\UpdateClient $cmdUpdate;
 * @property \Zeevin\Libiocm\Cmd\CreateTaskClient $cmdCreateTask;
 * @property \Zeevin\Libiocm\Cmd\QueryTaskClient $cmdQueryTask;
 * @property \Zeevin\Libiocm\Data\QueryHistoryClient $dataDeviceDataHistory;
 * @property \Zeevin\Libiocm\Data\QueryCapabilitiesClient $dataQueryCapabilities;
 * @property \Zeevin\Libiocm\Devgroup\CreateClient $devGroupsCreate;
 * @property \Zeevin\Libiocm\Devgroup\DeleteClient $devGroupsDelete;
 * @property \Zeevin\Libiocm\Devgroup\UpdateClient $devGroupsUpdate;
 * @property \Zeevin\Libiocm\Devgroup\QueryClient $devGroupsQuery;
 * @property \Zeevin\Libiocm\Devgroup\SpecificQueryClient $devGroupsQuerySpecific;
 * @property \Zeevin\Libiocm\Dm\DeleteDeviceClient $dmDeleteDevice;
 * @property \Zeevin\Libiocm\Dm\UpdateDeviceClient $dmUpdateDevice;
 * @property \Zeevin\Libiocm\Dm\QueryDevicesClient $dmQueryDevices;
 * @property \Zeevin\Libiocm\Dm\SingleQueryClient $dmSingleQuery;
 * @property \Zeevin\Libiocm\Dm\SpecificMemberQueryClient $dmQueryDevgroupSpecificMember;
 * @property \Zeevin\Libiocm\Dm\SpecificMemberAppendClient $dmAppendDevgroupSpecificMember;
 * @property \Zeevin\Libiocm\Dm\SpecificMemberDeleteClient $dmDeleteDevgroupSpecificMember;
 * @property \Zeevin\Libiocm\Reg\RegClient $regReg;
 * @property \Zeevin\Libiocm\Reg\CheckActivatedStatClient $regCheckActivatedStat;
 * @property \Zeevin\Libiocm\Reg\RefreshKeyClient $regRefreshKey;
 * @property \Zeevin\Libiocm\Sub\RegClient $subReg;
 * @property \Zeevin\Libiocm\Sub\QueryClient $subQuery;
 * @property \Zeevin\Libiocm\Sub\CreateClient $subCreate;
 * @property \Zeevin\Libiocm\Sub\BatchQueryClient $subQueryBatch;
 * @property \Zeevin\Libiocm\Sub\DeleteClient $subDelete;
 * @property \Zeevin\Libiocm\Sub\BatchDeleteClient $subDeleteBatch;
 */
class Application extends ServiceContainer
{
    protected $providers = [
        Zeevin\Libiocm\Core\Providers\CacheProvider::class,
        Zeevin\Libiocm\Sec\ServiceProvider::class,
        Zeevin\Libiocm\Reg\ServiceProvider::class,
        Zeevin\Libiocm\Dm\ServiceProvider::class,
        Zeevin\Libiocm\Sub\ServiceProvider::class,
        Zeevin\Libiocm\Data\ServiceProvider::class,
        Zeevin\Libiocm\Cmd\ServiceProvider::class,
        Zeevin\Libiocm\BatchTask\ServiceProvider::class,
        Zeevin\Libiocm\Devgroup\ServiceProvider::class,
    ];

    /**
     * @param $name
     *
     * @return mixed
     */
    public function __get($name)
    {
        return $this[$name];
    }
}
