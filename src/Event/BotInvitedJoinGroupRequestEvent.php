<?php

namespace Qbhy\Mirai\Event;

/**
 * @method int eventId() 事件标识，响应该事件时的标识
 * @method int fromId() 申请人QQ号
 * @method int groupId() 申请人如果通过某个群添加好友，该项为该群群号；否则为0
 * @method string groupName() 被邀请进入群的群名称
 * @method string nick() 申请人的昵称或群名片
 * @method string message() 申请消息
 * Class BotInvitedJoinGroupRequestEvent
 * @package Qbhy\Mirai\Event
 */
class BotInvitedJoinGroupRequestEvent extends AbstractEvent
{
}