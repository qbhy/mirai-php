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

class FlashImage extends AbstractMessage
{
    protected $type = MessageTypeConst::FLASH_IMAGE;

    public function imageId()
    {
        return $this->getRawValue('imageId');
    }

    public function url()
    {
        return $this->getRawValue('url');
    }

    public function path()
    {
        return $this->getRawValue('path');
    }
}
