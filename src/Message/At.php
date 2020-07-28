<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/.php_cs
 * @document https://github.com/qbhy/.php_cs/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/.php_cs/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Message;

class At extends AbstractMessage
{
    protected $type = MessageTypeConst::AT;

    public function target()
    {
        return $this->getRawValue('target');
    }

    public function display()
    {
        return $this->getRawValue('display');
    }
}
