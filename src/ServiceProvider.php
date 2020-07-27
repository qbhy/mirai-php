<?php

namespace Qbhy\Mirai;

use Pimple\Container;
use GuzzleHttp\Client;
use Hanson\Foundation\Http;
use Pimple\ServiceProviderInterface;

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
