<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

use Qbhy\Mirai\Event\EventConst;
use Qbhy\Mirai\Event\EventInterface;
use Qbhy\Mirai\Event\Listener;

return [
    /*
     * 是否开启调试
     */
    'debug' => true,

    /*
     * 机器人地址
     */
    'host' => 'http://localhost:8000',

    /*
     * 密钥
     */
    'auth_key' => 'your auth key',

    /*
     * QQ号
     */
    'qq' => 'your qq',

    /*
     * 支持一个事件多个监听器和一个监听器
     */
    'listeners' => [
        EventConst::FRIEND_MESSAGE => [\Qbhy\Mirai\DemoListener::class],
        EventConst::GROUP_MESSAGE => \Qbhy\Mirai\DemoListener::class,
    ],

    /*
     * 监听器工厂
     * 如果在 laravel 或者 hyperf 这种支持容器的环境下使用。
     * 可以设置该属性，可以让 listener 支持依赖注入，让代码更优雅。
     */
    'listener_factory' => function ($listener) {
        return new $listener();
    },

    /*
     * 监听器调用器
     * 如果在 laravel 或者 hyperf 这种支持容器的环境下使用。
     * 可以设置该属性，可以让 listener 支持依赖注入，让代码更优雅。
     */
    'listener_caller' => function (Listener $listener, EventInterface $event) {
        return $listener->handle($event);
    },
];
