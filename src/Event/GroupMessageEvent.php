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

use Qbhy\Mirai\MessageChain;

/**
 * @method array sender()
 * Class GroupMessageEvent
 */
class GroupMessageEvent extends AbstractEvent
{
    /**
     * @return MessageChain
     */
    public function messageChain()
    {
        return new MessageChain($this->getRawValue('messageChain', []));
    }

    public function memberName()
    {
        return $this->getRawValue('sender', [])['memberName'] ?? null;
    }

    public function group()
    {
        return $this->getRawValue('sender', [])['group'] ?? null;
    }
}
