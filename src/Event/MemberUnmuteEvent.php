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
 * @method array member()
 * @method array operator() 里面有 id memberName permission
 * Class MemberUnmuteEvent
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
