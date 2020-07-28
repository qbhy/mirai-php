<?php

namespace Qbhy\Mirai\Event;

use Carbon\Carbon;

/**
 * @method array operator() 里面有 id memberName permission group:id name permission
 * Class BotUnmuteEvent
 * @package Qbhy\Mirai\Event
 */
class BotUnmuteEvent extends AbstractEvent
{
    public function id()
    {
        return $this->getRawValue('operator', [])['id'] ?? null;
    }

    public function group()
    {
        return $this->getRawValue('operator', [])['group'] ?? null;
    }

    public function memberName()
    {
        return $this->getRawValue('operator', [])['memberName'] ?? null;
    }

    public function permission()
    {
        return $this->getRawValue('operator', [])['permission'] ?? null;
    }
}