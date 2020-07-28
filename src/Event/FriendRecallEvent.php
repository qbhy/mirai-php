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

use Carbon\Carbon;

/**
 * @method int authorId() 原消息发送者的QQ号
 * @method int messageId()
 * @method int operator() 好友QQ号或者botQQ号
 * Class FriendRecallEvent
 */
class FriendRecallEvent extends AbstractEvent
{
    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}
