<?php

namespace Qbhy\Mirai\Message;

class Poke extends AbstractMessage
{
    protected $type = MessageTypeConst::POKE;

    const POKE = 'Poke'; // 戳一戳
    const SHOW_LOVE = 'ShowLove'; // 比心
    const LIKE = 'Like'; // 点赞
    const HEART_BROKEN = 'ShowLove'; // 心碎
    const SIX_SIX_SIX = 'SixSixSix'; // 666
    const FANG_DA_ZHAO = 'FangDaZhao'; // 放大招

    public function name()
    {
        return $this->getRawValue('name');
    }
}