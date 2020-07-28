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

namespace Qbhy\Mirai\Event;

/**
 * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md
 * Class EventConst
 */
class EventConst
{
    const CLASS_MAP = [
        EventConst::BOT_ONLINE => BotOnlineEvent::class,
        EventConst::BOT_ACTIVE_OFFLINE => BotActiveOfflineEvent::class,
        EventConst::BOT_FORCE_OFFLINE => BotForceOfflineEvent::class,
        EventConst::BOT_DROPPED_OFFLINE => BotDroppendOfflineEvent::class,
        EventConst::BOT_RELOGIN => BotReloginEvent::class,
        EventConst::GROUP_RECALL => GroupRecallEvent::class,
        EventConst::FRIEND_RECALL => FriendRecallEvent::class,
        EventConst::BOT_GROUP_PERMISSION_CHANGED => BotGroupPermissionChangeEvent::class,
        EventConst::BOT_MUTE => BotMuteEvent::class,
        EventConst::BOT_UNMUTE => BotUnmuteEvent::class,
        EventConst::BOT_JOIN_GROUP => BotJoinGroupEvent::class,
        EventConst::BOT_ACTIVE_LEAVE => BotActiveLeaveEvent::class,
        EventConst::BOT_KICK_LEAVE => BotKickLeaveEvent::class,
        EventConst::GROUP_NAME_CHANGED => GroupNameChangeEvent::class,
        EventConst::GROUP_ENTRANCE_ANNOUNCEMENT_CHANGED => GroupEntranceAnnouncementChangeEvent::class,
        EventConst::GROUP_MUTE_ALL => GroupMuteAllEvent::class,
        EventConst::GROUP_ALLOW_ANONYMOUS_CHAT => GroupAllowAnonymousChatEvent::class,
        EventConst::GROUP_ALLOW_CONFESS_TALK => GroupAllowConfessTalkEvent::class,
        EventConst::GROUP_ALLOW_MEMBER_INVITE => GroupAllowMemberInviteEvent::class,
        EventConst::MEMBER_JOIN => MemberJoinEvent::class,
        EventConst::MEMBER_KICK_LEAVE => MemberKickLeaveEvent::class,
        EventConst::MEMBER_QUIT_LEAVE => MemberQuitLeaveEvent::class,
        EventConst::MEMBER_CARD_CHANGED => MemberCardChangeEvent::class,
        EventConst::MEMBER_SPECIAL_TITLE_CHANGED => MemberSpecialTitleChangeEvent::class,
        EventConst::MEMBER_PERMISSION_CHANGED => MemberPermissionChangeEvent::class,
        EventConst::MEMBER_MUTE => MemberMuteEvent::class,
        EventConst::MEMBER_UNMUTE => MemberUnmuteEvent::class,
        EventConst::NEW_FRIEND_REQUEST => NewFriendRequestEvent::class,
        EventConst::MEMBER_JOIN_REQUEST => MemberJoinRequestEvent::class,
        EventConst::BOT_INVITED_JOIN_GROUP_REQUEST => BotInvitedJoinGroupRequestEvent::class,

        // 消息事件 start
        EventConst::FRIEND_MESSAGE => FriendMessageEvent::class,
        EventConst::GROUP_MESSAGE => GroupMessageEvent::class,
        EventConst::TEMP_MESSAGE => TempMessageEvent::class,
    ];

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E7%99%BB%E5%BD%95%E6%88%90%E5%8A%9F
     */
    const BOT_ONLINE = 'BotOnlineEvent'; // Bot登录成功

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E4%B8%BB%E5%8A%A8%E7%A6%BB%E7%BA%BF
     */
    const BOT_ACTIVE_OFFLINE = 'BotOfflineEventActive'; // Bot主动离线

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E6%8C%A4%E4%B8%8B%E7%BA%BF
     */
    const BOT_FORCE_OFFLINE = 'BotOfflineEventForce'; // Bot被挤下线

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E6%9C%8D%E5%8A%A1%E5%99%A8%E6%96%AD%E5%BC%80%E6%88%96%E5%9B%A0%E7%BD%91%E7%BB%9C%E9%97%AE%E9%A2%98%E8%80%8C%E6%8E%89%E7%BA%BF
     */
    const BOT_DROPPED_OFFLINE = 'BotOfflineEventDropped'; // Bot被服务器断开或因网络问题而掉线

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E4%B8%BB%E5%8A%A8%E9%87%8D%E6%96%B0%E7%99%BB%E5%BD%95
     */
    const BOT_RELOGIN = 'BotReloginEvent'; // Bot主动重新登录

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%BE%A4%E6%B6%88%E6%81%AF%E6%92%A4%E5%9B%9E
     */
    const GROUP_RECALL = 'GroupRecallEvent'; // 群消息撤回

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E5%A5%BD%E5%8F%8B%E6%B6%88%E6%81%AF%E6%92%A4%E5%9B%9E
     */
    const FRIEND_RECALL = 'FriendRecallEvent'; // 好友消息撤回

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E5%9C%A8%E7%BE%A4%E9%87%8C%E7%9A%84%E6%9D%83%E9%99%90%E8%A2%AB%E6%94%B9%E5%8F%98-%E6%93%8D%E4%BD%9C%E4%BA%BA%E4%B8%80%E5%AE%9A%E6%98%AF%E7%BE%A4%E4%B8%BB
     */
    const BOT_GROUP_PERMISSION_CHANGED = 'BotGroupPermissionChangeEvent'; // Bot在群里的权限被改变. 操作人一定是群主

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E7%A6%81%E8%A8%80
     */
    const BOT_MUTE = 'BotMuteEvent'; // Bot被禁言

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E5%8F%96%E6%B6%88%E7%A6%81%E8%A8%80
     */
    const BOT_UNMUTE = 'BotUnmuteEvent'; // Bot被取消禁言

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E5%8A%A0%E5%85%A5%E4%BA%86%E4%B8%80%E4%B8%AA%E6%96%B0%E7%BE%A4
     */
    const BOT_JOIN_GROUP = 'BotJoinGroupEvent'; // bot 加入了一个新群

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E4%B8%BB%E5%8A%A8%E9%80%80%E5%87%BA%E4%B8%80%E4%B8%AA%E7%BE%A4
     */
    const BOT_ACTIVE_LEAVE = 'BotLeaveEventActive'; // bot 退出了一个群

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E8%B8%A2%E5%87%BA%E4%B8%80%E4%B8%AA%E7%BE%A4
     */
    const BOT_KICK_LEAVE = 'BotLeaveEventKick'; // bot 被踢出了一个群

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%9F%90%E4%B8%AA%E7%BE%A4%E5%90%8D%E6%94%B9%E5%8F%98
     */
    const GROUP_NAME_CHANGED = 'GroupNameChangeEvent'; // 某个群名改变

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%9F%90%E7%BE%A4%E5%85%A5%E7%BE%A4%E5%85%AC%E5%91%8A%E6%94%B9%E5%8F%98
     */
    const GROUP_ENTRANCE_ANNOUNCEMENT_CHANGED = 'GroupEntranceAnnouncementChangeEvent'; // 某群入群公告改变

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E5%85%A8%E5%91%98%E7%A6%81%E8%A8%80
     */
    const GROUP_MUTE_ALL = 'GroupMuteAllEvent'; // 全员禁言

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E5%8C%BF%E5%90%8D%E8%81%8A%E5%A4%A9
     */
    const GROUP_ALLOW_ANONYMOUS_CHAT = 'GroupAllowAnonymousChatEvent'; // 匿名聊天

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E5%9D%A6%E7%99%BD%E8%AF%B4
     */
    const GROUP_ALLOW_CONFESS_TALK = 'GroupAllowConfessTalkEvent'; // 坦白说

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E5%85%81%E8%AE%B8%E7%BE%A4%E5%91%98%E9%82%80%E8%AF%B7%E5%A5%BD%E5%8F%8B%E5%8A%A0%E7%BE%A4
     */
    const GROUP_ALLOW_MEMBER_INVITE = 'GroupAllowMemberInviteEvent'; // 允许群员邀请好友加群

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%96%B0%E4%BA%BA%E5%85%A5%E7%BE%A4%E7%9A%84%E4%BA%8B%E4%BB%B6
     */
    const MEMBER_JOIN = 'MemberJoinEvent'; // 新人入群的事件

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%88%90%E5%91%98%E8%A2%AB%E8%B8%A2%E5%87%BA%E7%BE%A4%E8%AF%A5%E6%88%90%E5%91%98%E4%B8%8D%E6%98%AFbot
     */
    const MEMBER_KICK_LEAVE = 'MemberLeaveEventKick'; // 成员被踢出群（该成员不是Bot）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%88%90%E5%91%98%E4%B8%BB%E5%8A%A8%E7%A6%BB%E7%BE%A4%E8%AF%A5%E6%88%90%E5%91%98%E4%B8%8D%E6%98%AFbot
     */
    const MEMBER_QUIT_LEAVE = 'MemberLeaveEventQuit'; // 成员主动离群（该成员不是Bot）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%BE%A4%E5%90%8D%E7%89%87%E6%94%B9%E5%8A%A8
     */
    const MEMBER_CARD_CHANGED = 'MemberCardChangeEvent'; // 群名片改动

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%BE%A4%E5%A4%B4%E8%A1%94%E6%94%B9%E5%8A%A8%E5%8F%AA%E6%9C%89%E7%BE%A4%E4%B8%BB%E6%9C%89%E6%93%8D%E4%BD%9C%E9%99%90%E6%9D%83
     */
    const MEMBER_SPECIAL_TITLE_CHANGED = 'MemberSpecialTitleChangeEvent'; // 群头衔改动（只有群主有操作限权）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%88%90%E5%91%98%E6%9D%83%E9%99%90%E6%94%B9%E5%8F%98%E7%9A%84%E4%BA%8B%E4%BB%B6%E8%AF%A5%E6%88%90%E5%91%98%E4%B8%8D%E5%8F%AF%E8%83%BD%E6%98%AFbot%E8%A7%81botgrouppermissionchangeevent
     */
    const MEMBER_PERMISSION_CHANGED = 'MemberPermissionChangeEvent'; // 成员权限改变的事件（该成员不可能是Bot，见BotGroupPermissionChangeEvent）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%BE%A4%E6%88%90%E5%91%98%E8%A2%AB%E7%A6%81%E8%A8%80%E4%BA%8B%E4%BB%B6%E8%AF%A5%E6%88%90%E5%91%98%E4%B8%8D%E5%8F%AF%E8%83%BD%E6%98%AFbot%E8%A7%81botmuteevent
     */
    const MEMBER_MUTE = 'MemberMuteEvent'; // 群成员被禁言事件（该成员不可能是Bot，见BotMuteEvent）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%BE%A4%E6%88%90%E5%91%98%E8%A2%AB%E5%8F%96%E6%B6%88%E7%A6%81%E8%A8%80%E4%BA%8B%E4%BB%B6%E8%AF%A5%E6%88%90%E5%91%98%E4%B8%8D%E5%8F%AF%E8%83%BD%E6%98%AFbot%E8%A7%81botunmuteevent
     */
    const MEMBER_UNMUTE = 'MemberUnmuteEvent'; // 群成员被取消禁言事件（该成员不可能是Bot，见BotMuteEvent）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E6%B7%BB%E5%8A%A0%E5%A5%BD%E5%8F%8B%E7%94%B3%E8%AF%B7
     */
    const NEW_FRIEND_REQUEST = 'NewFriendRequestEvent'; // 添加好友申请

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#%E7%94%A8%E6%88%B7%E5%85%A5%E7%BE%A4%E7%94%B3%E8%AF%B7bot%E9%9C%80%E8%A6%81%E6%9C%89%E7%AE%A1%E7%90%86%E5%91%98%E6%9D%83%E9%99%90
     */
    const MEMBER_JOIN_REQUEST = 'MemberJoinRequestEvent'; // 用户入群申请（Bot需要有管理员权限）

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/EventType.md#bot%E8%A2%AB%E9%82%80%E8%AF%B7%E5%85%A5%E7%BE%A4%E7%94%B3%E8%AF%B7
     */
    const BOT_INVITED_JOIN_GROUP_REQUEST = 'BotInvitedJoinGroupRequestEvent'; // Bot被邀请入群申请

    const FRIEND_MESSAGE = 'FriendMessage';

    const GROUP_MESSAGE = 'GroupMessage';

    const TEMP_MESSAGE = 'TempMessage';
}
