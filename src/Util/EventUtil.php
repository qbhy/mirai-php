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

namespace Qbhy\Mirai\Util;

use Qbhy\Mirai\Event\EventConst;
use Qbhy\Mirai\Event\EventInterface;

class EventUtil
{
    public static function fromArray(array $raw): ?EventInterface
    {
        if (isset($raw['type'], EventConst::CLASS_MAP[$raw['type']])) {
            $targetClass = EventConst::CLASS_MAP[$raw['type']];
            return new $targetClass($raw);
        }
    }
}
