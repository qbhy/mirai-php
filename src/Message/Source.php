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

namespace Qbhy\Mirai\Message;

use Carbon\Carbon;

class Source extends AbstractMessage
{
    protected $type = MessageTypeConst::SOURCE;

    public function id()
    {
        return $this->getRawValue('id');
    }

    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}
