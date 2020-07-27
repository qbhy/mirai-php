<?php

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