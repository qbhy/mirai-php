<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Module;

use Qbhy\Mirai\Message\MessageInterface;

/**
 * @see https://github.com/project-mirai/mirai-api-http#%E6%B6%88%E6%81%AF%E7%9B%B8%E5%85%B3
 * Class Auth
 */
class Message extends Module
{
    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E5%8F%91%E9%80%81%E5%A5%BD%E5%8F%8B%E6%B6%88%E6%81%AF
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function sendFriendMessage($sessionKey, $target, array $messageChain)
    {
        $messageChain = $this->resolveMessageChain($messageChain);

        return $this->decodeResponse(
            $this->http()->json('/sendFriendMessage', compact('sessionKey', 'target', 'messageChain'))
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E5%8F%91%E9%80%81%E4%B8%B4%E6%97%B6%E4%BC%9A%E8%AF%9D%E6%B6%88%E6%81%AF
     *
     * @param mixed $sessionKey
     * @param mixed $qq
     * @param mixed $group
     * @return array
     */
    public function sendTempMessage($sessionKey, $qq, $group, array $messageChain)
    {
        $messageChain = $this->resolveMessageChain($messageChain);

        return $this->decodeResponse(
            $this->http()->json('/sendTempMessage', compact('sessionKey', 'group', 'qq', 'messageChain'))
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E5%8F%91%E9%80%81%E7%BE%A4%E6%B6%88%E6%81%AF
     *
     * @param mixed $sessionKey
     * @param mixed $group
     * @return array
     */
    public function sendGroupMessage($sessionKey, $group, array $messageChain)
    {
        $messageChain = $this->resolveMessageChain($messageChain);

        return $this->decodeResponse(
            $this->http()->json('/sendGroupMessage', compact('sessionKey', 'group', 'messageChain'))
        );
    }

    /**
     * 使用此方法向指定对象（群或好友）发送图片消息 除非需要通过此手段获取imageId，否则不推荐使用该接口.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E5%8F%91%E9%80%81%E5%9B%BE%E7%89%87%E6%B6%88%E6%81%AF%E9%80%9A%E8%BF%87url
     *
     * @param mixed $sessionKey
     * @param mixed $group
     * @param mixed $qq
     * @return array
     */
    public function sendImageMessage($sessionKey, $group, $qq, array $urls)
    {
        return $this->decodeResponse(
            $this->http()->json('/sendImageMessage', compact('sessionKey', 'group', 'qq', 'urls'))
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E5%9B%BE%E7%89%87%E6%96%87%E4%BB%B6%E4%B8%8A%E4%BC%A0
     *
     * @param mixed $sessionKey
     * @param mixed $type
     * @param mixed $img
     * @return array
     */
    public function uploadImage($sessionKey, $type, $img)
    {
        return $this->decodeResponse(
            $this->http()->json('/uploadImage', compact('sessionKey', 'type', 'img'))
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E6%92%A4%E5%9B%9E%E6%B6%88%E6%81%AF
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function recall($sessionKey, $target)
    {
        return $this->decodeResponse(
            $this->http()->json('/recall', compact('sessionKey', 'target'))
        );
    }

    /**
     * 使用此方法获取bot接收到的最老消息和最老各类事件(会从MiraiApiHttp消息记录中删除).
     *
     * @param mixed $sessionKey
     * @param mixed $count
     * @return array
     */
    public function fetchMessage($sessionKey, $count)
    {
        return $this->decodeResponse(
            $this->http()->get('/fetchMessage', ['query' => compact('sessionKey', 'count')])
        );
    }

    /**
     * 使用此方法获取bot接收到的最新消息和最新各类事件(会从MiraiApiHttp消息记录中删除).
     *
     * @param mixed $sessionKey
     * @param mixed $count
     * @return array
     */
    public function fetchLatestMessage($sessionKey, $count)
    {
        return $this->decodeResponse(
            $this->http()->get('/fetchMessage', ['query' => compact('sessionKey', 'count')])
        );
    }

    /**
     * 使用此方法获取bot接收到的最老消息和最老各类事件(不会从MiraiApiHttp消息记录中删除).
     *
     * @param mixed $sessionKey
     * @param mixed $count
     * @return array
     */
    public function peekMessage($sessionKey, $count)
    {
        return $this->decodeResponse(
            $this->http()->get('/peekMessage', ['query' => compact('sessionKey', 'count')])
        );
    }

    /**
     * 使用此方法获取bot接收到的最新消息和最新各类事件(不会从MiraiApiHttp消息记录中删除).
     *
     * @param mixed $sessionKey
     * @param mixed $count
     * @return array
     */
    public function peekLatestMessage($sessionKey, $count)
    {
        return $this->decodeResponse(
            $this->http()->get('/peekLatestMessage', ['query' => compact('sessionKey', 'count')])
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E9%80%9A%E8%BF%87messageid%E8%8E%B7%E5%8F%96%E4%B8%80%E6%9D%A1%E8%A2%AB%E7%BC%93%E5%AD%98%E7%9A%84%E6%B6%88%E6%81%AF
     * 通过messageId获取一条被缓存的消息
     *
     * @param mixed $sessionKey
     * @param mixed $id
     * @return array
     */
    public function messageFromId($sessionKey, $id)
    {
        return $this->decodeResponse(
            $this->http()->get('/messageFromId', ['query' => compact('sessionKey', 'id')])
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E6%9F%A5%E7%9C%8B%E7%BC%93%E5%AD%98%E7%9A%84%E6%B6%88%E6%81%AF%E6%80%BB%E6%95%B0
     * 查看缓存的消息总数
     *
     * @param mixed $sessionKey
     * @return array
     */
    public function countMessage($sessionKey)
    {
        return $this->decodeResponse(
            $this->http()->get('/countMessage', ['query' => compact('sessionKey')])
        );
    }

    protected function resolveMessageChain(array $messageChain)
    {
        return array_map(function ($message) {
            return $message instanceof MessageInterface ? $message->toArray() : $message;
        }, $messageChain);
    }
}
