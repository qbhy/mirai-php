<?php

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
     * @return Plain[]|MessageInterface[]
     */
    public function origin()
    {
        return array_map(function ($msg) {
            return MessageUtil::fromArray($msg);
        }, $this->getRawValue('origin'));
    }
}