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

namespace Qbhy\Mirai\Message;

class Face extends AbstractMessage
{
    protected $type = MessageTypeConst::FACE;

    public function faceId()
    {
        return $this->getRawValue('faceId');
    }

    public function name()
    {
        return $this->getRawValue('name');
    }
}
