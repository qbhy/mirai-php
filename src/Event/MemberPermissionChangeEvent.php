<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原权限
 * @method string new() @Deprecated
 * @method string current() 新权限
 * @method array member() 头衔改动的群员的信息,里面有 id memberName permission group
 * Class MemberPermissionChangeEvent
 */
class MemberPermissionChangeEvent extends AbstractEvent
{
    public function group()
    {
        return $this->getRawValue('member', [])['group'] ?? null;
    }
}
