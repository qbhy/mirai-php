<?php

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原权限
 * @method string new() @Deprecated
 * @method string current() 新权限
 * @method array member() 头衔改动的群员的信息,里面有 id memberName permission group
 * Class MemberPermissionChangeEvent
 * @package Qbhy\Mirai\Event
 */
class MemberPermissionChangeEvent extends AbstractEvent
{
    public function group()
    {
        return $this->getRawValue('member', [])['group'] ?? null;
    }
}