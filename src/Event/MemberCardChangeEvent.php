<?php

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原名片
 * @method string new() @Deprecated
 * @method string current() 新名片
 * @method array member() 名片改动的群员的信息,里面有 id memberName permission group
 * @method array operator() 里面有 id memberName permission
 * Class MemberCardChangeEvent
 * @package Qbhy\Mirai\Event
 */
class MemberCardChangeEvent extends AbstractEvent
{
    public function group()
    {
        return $this->getRawValue('operator', [])['group'] ?? null;
    }
}