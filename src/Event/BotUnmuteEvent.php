<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Event;

/**
 * @method array operator() 里面有 id memberName permission group:id name permission
 * Class BotUnmuteEvent
 */
class BotUnmuteEvent extends AbstractEvent
{
    public function id()
    {
        return $this->getRawValue('operator', [])['id'] ?? null;
    }

    public function group()
    {
        return $this->getRawValue('operator', [])['group'] ?? null;
    }

    public function memberName()
    {
        return $this->getRawValue('operator', [])['memberName'] ?? null;
    }

    public function permission()
    {
        return $this->getRawValue('operator', [])['permission'] ?? null;
    }
}
