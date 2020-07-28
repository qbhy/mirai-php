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

/**
 * @see https://github.com/project-mirai/mirai-api-http#%E7%AE%A1%E7%90%86%E7%9B%B8%E5%85%B3
 * Class Manager
 */
class Manager extends Module
{
    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E5%A5%BD%E5%8F%8B%E5%88%97%E8%A1%A8
     *
     * @param mixed $sessionKey
     * @return array
     */
    public function friendList($sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->get('/friendList', ['query' => compact('sessionKey')])
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E7%BE%A4%E5%88%97%E8%A1%A8
     *
     * @param mixed $sessionKey
     * @return array
     */
    public function groupList($sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->get('/groupList', ['query' => compact('sessionKey')])
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E7%BE%A4%E6%88%90%E5%91%98%E5%88%97%E8%A1%A8
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function memberList($target, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->get('/memberList', ['query' => compact('sessionKey', 'target')])
        );
    }

    /**
     * 全员禁言
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E7%BE%A4%E5%85%A8%E4%BD%93%E7%A6%81%E8%A8%80
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function muteAll($target, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/muteAll', compact('sessionKey', 'target'))
        );
    }

    /**
     * 全员禁言
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E7%BE%A4%E6%88%90%E5%91%98%E5%88%97%E8%A1%A8
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function unmuteAll($target, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/unmuteAll', compact('sessionKey', 'target'))
        );
    }

    /**
     * 群禁言群成员.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E7%BE%A4%E7%A6%81%E8%A8%80%E7%BE%A4%E6%88%90%E5%91%98
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @param mixed $memberId
     * @param mixed $time
     * @return array
     */
    public function mute($target, $memberId, $time = 60, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/mute', compact('sessionKey', 'target', 'memberId', 'time'))
        );
    }

    /**
     * 群禁言群成员.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E7%BE%A4%E8%A7%A3%E9%99%A4%E7%BE%A4%E6%88%90%E5%91%98%E7%A6%81%E8%A8%80
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @param mixed $memberId
     * @return array
     */
    public function unmute($target, $memberId, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/unmute', compact('sessionKey', 'target', 'memberId'))
        );
    }

    /**
     * 移除群成员.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E7%A7%BB%E9%99%A4%E7%BE%A4%E6%88%90%E5%91%98
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @param mixed $memberId
     * @param mixed $msg
     * @return array
     */
    public function kick($target, $memberId, $msg = '', $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/kick', compact('sessionKey', 'target', 'memberId', 'msg'))
        );
    }

    /**
     * 移除群成员.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E9%80%80%E5%87%BA%E7%BE%A4%E8%81%8A
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function quit($target, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/quit', compact('sessionKey', 'target'))
        );
    }

    /**
     * 群设置.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E7%BE%A4%E8%AE%BE%E7%BD%AE
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function groupConfig($target, array $config, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/groupConfig', compact('sessionKey', 'target', 'config'))
        );
    }

    /**
     * 获取群设置.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E7%BE%A4%E8%AE%BE%E7%BD%AE
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @return array
     */
    public function getGroupConfig($target, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->get('/groupConfig', ['query' => compact('sessionKey', 'target')])
        );
    }

    /**
     * 修改群成员资料.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E4%BF%AE%E6%94%B9%E7%BE%A4%E5%91%98%E8%B5%84%E6%96%99
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @param mixed $memberId
     * @return array
     */
    public function memberInfo($target, $memberId, array $info, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json('/memberInfo', compact('sessionKey', 'target', 'memberId', 'info'))
        );
    }

    /**
     * 获取群员资料.
     *
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E7%BE%A4%E8%AE%BE%E7%BD%AE
     *
     * @param mixed $sessionKey
     * @param mixed $target
     * @param mixed $memberId
     * @return array
     */
    public function getMemberInfo($target, $memberId, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->get('/memberInfo', ['query' => compact('sessionKey', 'target', 'memberId')])
        );
    }

    /**
     * 处理好友请求
     *
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%B7%BB%E5%8A%A0%E5%A5%BD%E5%8F%8B%E7%94%B3%E8%AF%B7
     *
     * @param mixed $sessionKey
     * @param mixed $eventId
     * @param mixed $fromId
     * @param mixed $groupId
     * @param mixed $operate
     * @param mixed $message
     * @return array
     */
    public function friendApply($eventId, $fromId, $groupId, $operate, $message, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json(
                '/resp/newFriendRequestEvent',
                compact('sessionKey', 'eventId', 'groupId', 'fromId', 'operate', 'message')
            )
        );
    }

    /**
     * 处理入群申请.
     *
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%94%A8%E6%88%B7%E5%85%A5%E7%BE%A4%E7%94%B3%E8%AF%B7bot%E9%9C%80%E8%A6%81%E6%9C%89%E7%AE%A1%E7%90%86%E5%91%98%E6%9D%83%E9%99%90
     *
     * @param mixed $sessionKey
     * @param mixed $eventId
     * @param mixed $fromId
     * @param mixed $groupId
     * @param mixed $operate
     * @param mixed $message
     * @return array
     */
    public function memberJoinApply($eventId, $fromId, $groupId, $operate, $message, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json(
                '/resp/memberJoinRequestEvent',
                compact('sessionKey', 'eventId', 'groupId', 'fromId', 'operate', 'message')
            )
        );
    }

    /**
     * Bot被邀请入群申请.
     *
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E9%82%80%E8%AF%B7%E5%85%A5%E7%BE%A4%E7%94%B3%E8%AF%B7
     *
     * @param mixed $sessionKey
     * @param mixed $eventId
     * @param mixed $fromId
     * @param mixed $groupId
     * @param mixed $operate
     * @param mixed $message
     * @return array
     */
    public function invitedJoinGroup($eventId, $fromId, $groupId, $operate, $message, $sessionKey = null)
    {
        $sessionKey = $sessionKey ?? $this->bot->auth->getSession();
        return $this->decodeResponse(
            $this->http()->json(
                '/resp/botInvitedJoinGroupRequestEvent',
                compact('sessionKey', 'eventId', 'groupId', 'fromId', 'operate', 'message')
            )
        );
    }
}
