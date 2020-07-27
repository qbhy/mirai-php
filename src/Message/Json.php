<?php

namespace Qbhy\Mirai\Message;

class Json extends AbstractMessage
{
    protected $type = MessageTypeConst::JSON;

    public function json()
    {
        return $this->getRawValue('json');
    }
}