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

use Qbhy\Mirai\Message\MessageTypeConst;
use Qbhy\Mirai\Message\Plain;
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

    /**
     * 用于转发消息.
     */
    public function forward(): array
    {
        $messages = [];

        foreach ($this->messageChain as $value) {
            if ($value->type() === MessageTypeConst::SOURCE) {
                continue;
            }
            $messages[] = $value->toArray();
        }
        return $messages;
    }

    /**
     * 获取文摘.
     * @return string
     */
    public function abstract()
    {
        $text = '';

        foreach ($this->messageChain as $value) {
            if ($value instanceof Plain) {
                $text .= $value->text() ?? '';
            }
        }

        return $text;
    }

    /**
     * 判断是否存在某个类型的消息.
     * @param mixed $type
     */
    public function has($type): bool
    {
        foreach ($this->messageChain as $value) {
            if ($value->type() === $type) {
                return true;
            }
        }
        return false;
    }
}
