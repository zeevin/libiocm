中国电信物联网开放平台API（北向）对SDK
=======================

<p align="center">
<a href="https://packagist.org/packages/zeevin/libiocm"><img src="https://poser.pugx.org/zeevin/libiocm/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/zeevin/libiocm"><img src="https://poser.pugx.org/zeevin/libiocm/d/monthly" alt="Monthly downloads"></a>
<a href="https://packagist.org/packages/zeevin/libiocm"><img src="https://poser.pugx.org/zeevin/libiocm/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/zeevin/libiocm"><img src="https://poser.pugx.org/zeevin/libiocm/license.svg" alt="License"></a>
</p>

Libiocm 实现了对中国电信物联网开发平台（北向）API的对接。

### 关于NB-IoT的开发，有兴趣的朋友可以加QQ群交流：群号:577640752

----------------

### 安装
```bash
composer require zeevin/libiocm
```

### 更新
因目前还有几个接口未对接，如果先安装了本库，后期可以随时更新，以便在全部对接完后使用完整库。
```bash
composer update zeevin/libiocm
```
### 必须操作：

添加一个自定义的autoload.php文件，入口程序(通常是index.php)直接引用autoload.php,不要直接引用vendor/autoload.php。
autoload.php内容如下：
```php
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require_once '../vendor/autoload.php';
AnnotationRegistry::registerLoader([$loader, 'loadClass']);
return $loader;
```

----------------

#### 对接进度：

```text

2.1 应用安全接入
 2.1.1 鉴权 Zeevin\Libiocm\Sec\LoginClient
 2.1.2 刷新token Zeevin\Libiocm\Sec\RefreshTokenClient

2.2 设备管理
 2.2.1 注册直连设备 Zeevin\Libiocm\Reg\RegClient
 2.2.2 刷新设备密钥 Zeevin\Libiocm\Reg\RefreshKeyClient
 2.2.3 修改设备信息 Zeevin\Libiocm\Dm\UpdateDeviceClient
 2.2.4 删除直连设备 Zeevin\Libiocm\Dm\DeleteDeviceClient
 2.2.5 查询设备激活状态 Zeevin\Libiocm\Reg\CheckActivatedStatClient
 
2.3 批量处理
 2.3.1 创建批量任务 Zeevin\Libiocm\BatchTask\CreateClient
 2.3.2 查询单个任务信息 Zeevin\Libiocm\BatchTask\QueryClient :响应中的param参数未适配动态类型
 2.3.3 查询任务详情信息 Zeevin\Libiocm\BatchTask\QueryDetailClient :响应中QueryTaskDetailDTOCloud2NA结构体的param参数未适配动态类型

2.4 规则管理 :稍后适配

2.5 订阅管理
 2.5.1 订阅平台业务数据 Zeevin\Libiocm\Sub\RegClient
 2.5.2 订阅平台管理数据 Zeevin\Libiocm\Sub\CreateClient
 2.5.3 查询单个订阅  Zeevin\Libiocm\Sub\QueryClient
 2.5.4 批量查询订阅 Zeevin\Libiocm\Sub\BatchQueryClient
 2.5.5 删除单个订阅 Zeevin\Libiocm\Sub\DeleteClient
 2.5.6 批量删除订阅 Zeevin\Libiocm\Sub\BatchDeleteClient
 
2.6 消息推送 :此为推送信息，最后适配


2.7 命令下发
 2.7.1 创建设备命令 Zeevin\Libiocm\Cmd\CreateClient
 2.7.2 查询设备命令 Zeevin\Libiocm\Cmd\QueryClient
 2.7.3 修改设备命令 Zeevin\Libiocm\Cmd\UpdateClient
 2.7.4 创建设备命令撤销任务 Zeevin\Libiocm\Cmd\CreateTaskClient
 2.7.5 查询设备命令撤销任务 Zeevin\Libiocm\Cmd\QueryTaskClient
 
2.8 查询设备命令撤销任务 
 2.8.1 查询单个设备信息 Zeevin\Libiocm\Dm\SingleQueryClient
 2.8.2 批量查询设备信息列表 Zeevin\Libiocm\Dm\QueryDevicesClient
 2.8.3 查询设备历史数据 Zeevin\Libiocm\Data\QueryHistoryClient :响应参数中含有totalCount、pageSize、pageNo，但是文档没写，这里我仍然保留
 2.8.4 查询设备服务能力 Zeevin\Libiocm\Data\QueryCapabilitiesClient
 
2.9 设备组管理
 2.9.1 创建设备组 Zeevin\Libiocm\Devgroup\CreateClient
 2.9.2 删除设备组 Zeevin\Libiocm\Devgroup\DeleteClient
 2.9.3 修改设备组 Zeevin\Libiocm\Devgroup\UpdateClient
 2.9.4 查询设备组详情 Zeevin\Libiocm\Devgroup\QueryClient 文档中返回值：queryDevGroups实际不存在，返回的是list
 2.9.5 查询指定设备组 Zeevin\Libiocm\Devgroup\SpecificQueryClient
 2.9.6 查询指定设备组成员 Zeevin\Libiocm\Dm\SpecificMemberQueryClient
 2.9.7 增加设备组成员 Zeevin\Libiocm\Dm\SpecificMemberAppendClient  返回值中的deviceIds实际都是返回空，与文档不一致
 2.9.8 删除设备组成员 Zeevin\Libiocm\Dm\SpecificMemberDeleteClient 
 
 
2.10 设备升级 ：适配中

```


```text
使用方式请参考tests文件夹内的测试用例，使用前复制config.php.sample.php 为config.php,并根据自己情况修改配置参数。
```

----------------

### 主要完成如下内容：

- 1、使用JMS包装请求参数。以定义类变量的方式设置请求参数，便于参数的设置和参数提示。
- 2、使用JMS包装返回的json数据，默认会把请求数据映射为对应的RequestAttribute类，便于进一步使用。
- 3、使用doctrine/cache 缓存ouath token结果。目前适配了memcached、Redis、file三类。

----------------

### 注意事项：
- 1、Guzzle 库只支持pem格式的证书，因此需要将默认的p12格式证书转换成pem格式，比如：
```bash
openssl pkcs12 -in outgoing.CertwithKey.pkcs12 -out key.pem -nodes -clcerts
```
目前测试平台的证书密码是：IoM@1234，如果后期电信有更新需要同步更新。

- 2、电信编写的api文档看起来并不十分完善，有些返回信息是从头信息中查看，比如1.2.2.4 删除直连设备接口，
此接口在删除成功时返回结果需要查看头信息的statusCode和reasonPhrase内容，body中并没有json信息，为解决这种问题，
我在所有的请求结果中都加入了"statusCode"和"reasonPhrase"属性。

- 3、接口调用方式请查看tests文件夹下的示例。
