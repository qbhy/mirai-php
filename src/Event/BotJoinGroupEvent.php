<?php

namespace Qbhy\Mirai\Event;

/**
 * Class BotJoinGroupEvent
 * @package Qbhy\Mirai\Event
 */
class BotJoinGroupEvent extends AbstractEvent
{
    public function id()
    {
        return $this->getRawValue('group', [])['id'] ?? null;
    }

    public function name()
    {
        return $this->getRawValue('group', [])['name'] ?? null;
    }

    public function permission()
    {
        return $this->getRawValue('group', [])['permission'] ?? null;
    }
}