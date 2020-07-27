<?php

namespace Qbhy\Mirai\Message;

class Poke extends AbstractMessage
{
    protected $type = MessageTypeConst::POKE;

    public function name()
    {
        return $this->getRawValue('name');
    }
}