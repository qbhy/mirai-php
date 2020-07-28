<?php

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原群名
 * @method string new() @Deprecated
 * @method string current() 新群名
 * @method array operator() 里面有 id memberName permission
 * Class GroupEntranceAnnouncementChangeEvent
 * @package Qbhy\Mirai\Event
 */
class GroupEntranceAnnouncementChangeEvent extends AbstractEvent
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