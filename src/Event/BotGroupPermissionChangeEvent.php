<?php

namespace Qbhy\Mirai\Event;

use Carbon\Carbon;

/**
 * @method string origin() 原来的权限 OWNER、ADMINISTRATOR或MEMBER
 * @method string new() @Deprecated
 * @method string current() Bot的新权限，OWNER、ADMINISTRATOR或MEMBER
 * @method array group() 里面有 id name permission
 * Class BotGroupPermissionChangeEvent
 * @package Qbhy\Mirai\Event
 */
class BotGroupPermissionChangeEvent extends AbstractEvent
{
}