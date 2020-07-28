<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/.php_cs
 * @document https://github.com/qbhy/.php_cs/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/.php_cs/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Message;

use Qbhy\Mirai\Util\MessageUtil;

class Quote extends AbstractMessage
{
    protected $type = MessageTypeConst::QUOTE;

    public function id()
    {
        return $this->getRawValue('id');
    }

    public function groupId()
    {
        return $this->getRawValue('groupId');
    }

    public function senderId()
    {
        return $this->getRawValue('senderId');
    }

    public function targetId()
    {
        return $this->getRawValue('targetId');
    }

    /**
     * @return MessageInterface[]|Plain[]
     */
    public function origin()
    {
        return array_map(function ($msg) {
            return MessageUtil::fromArray($msg);
        }, $this->getRawValue('origin'));
    }
}
