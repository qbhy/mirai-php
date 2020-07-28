<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai;

use Hanson\Foundation\Foundation;
use Hanson\Foundation\Http;
use Qbhy\Mirai\Module\Auth;
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

    public function getAuthKey()
    {
        return $this->getConfig('auth_key');
    }
}
