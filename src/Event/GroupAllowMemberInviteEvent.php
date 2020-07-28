<?php

namespace Qbhy\Mirai\Event;

/**
 * @method bool origin() 原群名
 * @method bool new() @Deprecated
 * @method bool current() 新群名
 * @method array operator() 里面有 id memberName permission
 * Class GroupAllowMemberInviteEvent
 * @package Qbhy\Mirai\Event
 */
class GroupAllowMemberInviteEvent extends AbstractEvent
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