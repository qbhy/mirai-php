<?php

namespace Qbhy\Mirai;

use Hanson\Foundation\Foundation;
use Hanson\Foundation\Http;

/**
 * Class Bot
 * @package Qbhy\Mirai
 * @property-read Http $api
 * @property-read Plugin $plugin
 * @property-read Auth $auth
 * @property-read Manager $manager
 * @property-read Message $message
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
