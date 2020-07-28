<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Message;

class Poke extends AbstractMessage
{
    const POKE = 'Poke'; // 戳一戳

    const SHOW_LOVE = 'ShowLove'; // 比心

    const LIKE = 'Like'; // 点赞

    const HEART_BROKEN = 'ShowLove'; // 心碎

    const SIX_SIX_SIX = 'SixSixSix'; // 666

    const FANG_DA_ZHAO = 'FangDaZhao'; // 放大招

    protected $type = MessageTypeConst::POKE;

    public function name()
    {
        return $this->getRawValue('name');
    }
}
