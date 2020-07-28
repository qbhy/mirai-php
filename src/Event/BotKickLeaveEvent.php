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
 * Class BotKickLeave.
 */
class BotKickLeaveEvent extends AbstractEvent
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
