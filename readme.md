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

// 给指定还有发送文本消息
$bot->message->sendFriendMessage(572490755, [
    \Qbhy\Mirai\Util\MessageUtil::plain('文本消息'),
]);
```

[mirai-php](https://github.com/qbhy/mirai-php)
qbhy0715@qq.com
