<?php


namespace Qbhy\Mirai\Message;


use Carbon\Carbon;

class Source extends AbstractMessage
{
    protected $type = MessageTypeConst::SOURCE;

    public function id()
    {
        return $this->getRawValue('id');
    }

    public function time()
    {
        return Carbon::createFromTimestamp($this->getRawValue('time'));
    }
}