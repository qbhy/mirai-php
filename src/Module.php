<?php

namespace Qbhy\Mirai;

use Psr\Http\Message\ResponseInterface;

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