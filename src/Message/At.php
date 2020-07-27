<?php


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