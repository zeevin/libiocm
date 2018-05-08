<?php
/**
 * @link   http://www.init.lu
 * @author Cao Kang(caokang@outlook.com)
 * Date: 2018/5/8
 * Time: 下午7:37
 * Source: config.php.sample.php
 * Project: libiocm
 */

return [
    'http'  =>
        [
            'base_uri' => 'https://180.101.147.89:8743/iocm/app/',
        ],
    'iot'   =>
        [
            'appId'  => 'arpcdre4vat8oDWlmDOmvaU23444',
            'secret' => 'X7S_fDYnk5AFlN333kKWNHd44444',
        ],
    'cache' =>
        [
            //http://doctrine-orm.readthedocs.io/projects/doctrine-orm/en/latest/reference/caching.html
            'default'  => 'redis',
            'oauth_key' => 'oauth_return',
            'oauth_refresh_key' => 'oauth_refresh',
            'stores' => [
                'file' => [
                    'driver' => 'file',
                    'patch' => __DIR__.DIRECTORY_SEPARATOR.'cache'
                ],
                'memcached' => [
                    'server' => '127.0.0.1',
                    'port' => 11211
                ],
                'redis' => [
                    'driver' => 'predis',
                    'host' => '127.0.0.1',
                    'password' => null,
                    'port' => 6379,
                    'database'=> 0
                ]
            ]
        ],
];
