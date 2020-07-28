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

namespace Qbhy\Mirai;

use Qbhy\Mirai\Message\Source;
use Qbhy\Mirai\Util\MessageUtil;

class MessageChain
{
    protected $messageChain;

    public function __construct(array $messageChain)
    {
        $this->messageChain = array_map(function ($message) {
            return MessageUtil::fromArray($message);
        }, $messageChain);
    }

    /**
     * @return null|Source
     */
    public function source()
    {
        return $this->messageChain[0] ?? null;
    }

    /**
     * @return array|Message\MessageInterface[]
     */
    public function getMessageChain()
    {
        return $this->messageChain;
    }
}
