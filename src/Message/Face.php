<?php


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