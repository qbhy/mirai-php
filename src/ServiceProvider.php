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

use GuzzleHttp\Client;
use Hanson\Foundation\Http;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Qbhy\Mirai\Module\Auth;
use Qbhy\Mirai\Module\Manager;
use Qbhy\Mirai\Module\Message;
use Qbhy\Mirai\Module\Plugin;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['plugin'] = function (Bot $bot) {
            return new Plugin($bot);
        };

        $pimple['api'] = function (Bot $bot) {
            return (new Http($bot))->setClient(new Client([
                'base_uri' => $bot->getApiHost(),
            ]));
        };

        $pimple['message'] = function (Bot $bot) {
            return new Message($bot);
        };

        $pimple['auth'] = function (Bot $bot) {
            return new Auth($bot);
        };

        $pimple['manager'] = function (Bot $bot) {
            return new Manager($bot);
        };
    }
}
