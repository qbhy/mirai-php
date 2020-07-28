<?php

namespace Qbhy\Mirai\Event;

/**
 * @method array member()
 * Class MemberQuitLeaveEvent
 * @package Qbhy\Mirai\Event
 */
class MemberQuitLeaveEvent extends AbstractEvent
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