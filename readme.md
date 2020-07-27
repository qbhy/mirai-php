# qbhy/mirai-php
mirai http api 的 PHP sdk.
> 暂未封装 websocket 相关接口

## 安装 - install
```bash
$ composer require qbhy/mirai
```

## 使用 - usage
```php
$bot = new \Qbhy\Mirai\Bot([
    'debug' => true,

    'host' => 'http://localhost:8000',

    'auth_key' => 'your auth key',
]);

$bot->auth; // 授权相关接口
$bot->plugin; // 插件相关接口
$bot->manager; // 管理相关接口
$bot->message; // 消息相关接口
```

[mirai-php](https://github.com/qbhy/mirai-php)
qbhy0715@qq.com
