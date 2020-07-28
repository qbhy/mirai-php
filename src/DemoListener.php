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

use Qbhy\Mirai\Event\EventInterface;
use Qbhy\Mirai\Event\Listener;

class DemoListener implements Listener
{
    public function handle(EventInterface $event)
    {
    }
}
