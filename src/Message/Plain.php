<?php


namespace Qbhy\Mirai\Message;


class Plain extends AbstractMessage
{
    protected $type = MessageTypeConst::PLAIN;

    public function text()
    {
        return $this->getRawValue('text');
    }
}