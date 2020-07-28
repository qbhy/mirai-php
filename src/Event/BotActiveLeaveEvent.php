<?php

namespace Qbhy\Mirai\Event;

/**
 * Class BotLeaveEventActive
 * @package Qbhy\Mirai\Event
 */
class BotActiveLeaveEvent extends AbstractEvent
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