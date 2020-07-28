<?php

namespace Qbhy\Mirai\Event;

/**
 * @method array member()
 * @method int durationSeconds() 禁言时长，单位为秒
 * @method array operator() 里面有 id memberName permission
 * Class MemberMuteEvent
 * @package Qbhy\Mirai\Event
 */
class MemberMuteEvent extends AbstractEvent
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