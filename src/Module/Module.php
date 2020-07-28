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

namespace Qbhy\Mirai\Module;

use Psr\Http\Message\ResponseInterface;
use Qbhy\Mirai\Bot;

abstract class Module
{
    /**
     * @var Bot
     */
    protected $bot;

    public function __construct(Bot $bot)
    {
        $this->bot = $bot;
    }

    public function http()
    {
        return $this->bot->api;
    }

    protected function decodeResponse(ResponseInterface $response)
    {
        return @json_decode($response->getBody()->__toString(), true);
    }
}
