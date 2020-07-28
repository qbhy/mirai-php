<?php

namespace Qbhy\Mirai\Event;

use Carbon\Carbon;

/**
 * @method int authorId() 原消息发送者的QQ号
 * @method int messageId()
 * @method int operator() 好友QQ号或者botQQ号
 * Class FriendRecallEvent
 * @package Qbhy\Mirai\Event
 */
class FriendRecallEvent extends AbstractEvent
{
    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}