<?php

namespace Qbhy\Mirai\Message;

class Xml extends AbstractMessage
{
    protected $type = MessageTypeConst::XML;

    public function xml()
    {
        return $this->getRawValue('xml');
    }
}