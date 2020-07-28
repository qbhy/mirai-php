<?php

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原头衔
 * @method string new() @Deprecated
 * @method string current() 新头衔
 * @method array member() 头衔改动的群员的信息,里面有 id memberName permission group
 * Class MemberCardChangeEvent
 * @package Qbhy\Mirai\Event
 */
class MemberSpecialTitleChangeEvent extends AbstractEvent
{
    public function group()
    {
        return $this->getRawValue('operator', [])['group'] ?? null;
    }
}