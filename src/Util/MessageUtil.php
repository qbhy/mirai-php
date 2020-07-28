<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/.php_cs
 * @document https://github.com/qbhy/.php_cs/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/.php_cs/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Util;

use Qbhy\Mirai\Message\App;
use Qbhy\Mirai\Message\At;
use Qbhy\Mirai\Message\AtAll;
use Qbhy\Mirai\Message\Face;
use Qbhy\Mirai\Message\FlashImage;
use Qbhy\Mirai\Message\Image;
use Qbhy\Mirai\Message\Json;
use Qbhy\Mirai\Message\MessageInterface;
use Qbhy\Mirai\Message\MessageTypeConst;
use Qbhy\Mirai\Message\Plain;
use Qbhy\Mirai\Message\Poke;
use Qbhy\Mirai\Message\Quote;
use Qbhy\Mirai\Message\Source;
use Qbhy\Mirai\Message\Xml;

class MessageUtil
{
    public static function fromArray(array $raw): MessageInterface
    {
        if (isset($raw['type'], MessageTypeConst::CLASS_MAP[$raw['type']])) {
            $targetClass = MessageTypeConst::CLASS_MAP[$raw['type']];
            return new $targetClass($raw);
        }
    }

    public static function poke($name)
    {
        return new Poke(compact('name'));
    }

    public static function plain($text)
    {
        return new Plain(compact('text'));
    }

    public static function app($content)
    {
        return new App(compact('content'));
    }

    public static function at($target, $display)
    {
        return new At(compact('target', 'display'));
    }

    public static function atAll()
    {
        return new AtAll();
    }

    public static function face($faceId, $name)
    {
        return new Face(compact('faceId', 'name'));
    }

    public static function flashImage(array $image)
    {
        return new FlashImage($image);
    }

    public static function image(array $image)
    {
        return new Image($image);
    }

    public static function json($json)
    {
        return new Json(compact('json'));
    }

    public static function xml($xml)
    {
        return new Xml(compact('xml'));
    }

    public static function quote($id, $groupId, $senderId, $targetId, array $origin)
    {
        return new Quote(compact('id', 'groupId', 'senderId', 'targetId', 'origin'));
    }

    public static function source($id, $time)
    {
        return new Source(compact('id', 'time'));
    }
}
