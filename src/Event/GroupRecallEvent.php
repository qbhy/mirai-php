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
 * @method int authorId()
 * @method int messageId()
 * @method array group() 里面有 id name permission
 * @method array operator() 里面有 id memberName permission group,group同上
 * Class GroupRecallEvent
 */
class GroupRecallEvent extends AbstractEvent
{
    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}
