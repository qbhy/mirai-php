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

namespace Qbhy\Mirai\Module;

use Hanson\Foundation\Log;
use Qbhy\Mirai\Event\Listener;
use Qbhy\Mirai\Util\EventUtil;

class EventHandler extends Module
{
    public function handle(array $raw)
    {
        $event = EventUtil::fromArray($raw);
        if ($event) {
            $listeners = $this->bot->getEventListeners();
            $type = $event->type();

            if (isset($listeners[$type]) && ! empty($listeners[$type])) {
                $listeners = is_array($listeners[$type]) ? $listeners[$type] : [$listeners[$type]];
                $caller = $this->bot->getCaller();
                $factory = $this->bot->getFactory();

                foreach ($listeners as $listener) {
                    if (is_callable($factory)) {
                        $listener = call_user_func_array($factory, [$listener]);
                    } else {
                        $listener = new $listener();
                    }

                    if (is_callable($caller)) {
                        $result = call_user_func_array($caller, [$listener, $event]);
                    } else {
                        /** @var Listener $listener */
                        $result = $listener->handle($event);
                    }

                    if ($this->bot->isDebug()) {
                        Log::debug("监听器：{$type} 执行结果", [$result]);
                    }
                }
            } else {
                if ($this->bot->isDebug()) {
                    Log::debug("未监听的事件：{$type}", $event->toArray());
                }
            }
        } else {
            if ($this->bot->isDebug()) {
                Log::debug('该数组不属于mirai事件，或者暂不支持该事件', $raw);
            }
        }
    }
}
