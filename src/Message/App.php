<?php

namespace Qbhy\Mirai\Message;

class App extends AbstractMessage
{
    protected $type = MessageTypeConst::APP;

    public function content()
    {
        return $this->getRawValue('content');
    }
}