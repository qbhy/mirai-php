<?php

namespace Qbhy\Mirai\Event;

use Carbon\Carbon;

/**
 * @method int authorId()
 * @method int messageId()
 * @method array group() 里面有 id name permission
 * @method array operator() 里面有 id memberName permission group,group同上
 * Class GroupRecallEvent
 * @package Qbhy\Mirai\Event
 */
class GroupRecallEvent extends AbstractEvent
{
    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}