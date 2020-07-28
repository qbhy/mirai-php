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

namespace Qbhy\Mirai;

use Hanson\Foundation\Foundation;
use Hanson\Foundation\Http;
use Qbhy\Mirai\Event\EventInterface;
use Qbhy\Mirai\Event\Listener;
use Qbhy\Mirai\Module\Auth;
use Qbhy\Mirai\Module\EventHandler;
use Qbhy\Mirai\Module\Manager;
use Qbhy\Mirai\Module\Message;
use Qbhy\Mirai\Module\Plugin;

/**
 * Class Bot.
 * @property Http $api
 * @property Plugin $plugin
 * @property Auth $auth
 * @property Manager $manager
 * @property Message $message
 * @property EventHandler $event
 */
class Bot extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getApiHost()
    {
        return $this->getConfig('host');
    }

    public function getQQ()
    {
        return $this->getConfig('qq');
    }

    public function getAuthKey()
    {
        return $this->getConfig('auth_key');
    }

    public function getEventListeners()
    {
        return $this->getConfig('listeners') ?? [];
    }

    public function getCaller()
    {
        return $this->getConfig('listener_caller') ?? function ($listener) {
            return new $listener();
        };
    }

    public function getFactory()
    {
        return $this->getConfig('listener_factory') ?? function (Listener $listener, EventInterface $event) {
            return $listener->handle($event);
        };
    }

    public function isDebug()
    {
        return (bool) $this->getConfig('debug');
    }
}
