<?php

namespace Qbhy\Mirai\Event;

/**
 * @method array member()
 * @method array operator() 里面有 id memberName permission
 * Class MemberUnmuteEvent
 * @package Qbhy\Mirai\Event
 */
class MemberUnmuteEvent extends AbstractEvent
{
    public function id()
    {
        return $this->getRawValue('member', [])['id'] ?? null;
    }

    public function group()
    {
        return $this->getRawValue('member', [])['group'] ?? null;
    }

    public function memberName()
    {
        return $this->getRawValue('member', [])['memberName'] ?? null;
    }

    public function permission()
    {
        return $this->getRawValue('member', [])['permission'] ?? null;
    }
}