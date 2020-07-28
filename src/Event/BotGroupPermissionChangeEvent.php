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

namespace Qbhy\Mirai\Event;

/**
 * @method string origin() 原来的权限 OWNER、ADMINISTRATOR或MEMBER
 * @method string new() @Deprecated
 * @method string current() Bot的新权限，OWNER、ADMINISTRATOR或MEMBER
 * @method array group() 里面有 id name permission
 * Class BotGroupPermissionChangeEvent
 */
class BotGroupPermissionChangeEvent extends AbstractEvent
{
}
