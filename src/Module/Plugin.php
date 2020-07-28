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

class Plugin extends Module
{
    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E6%8F%92%E4%BB%B6%E4%BF%A1%E6%81%AF
     *
     * @return array
     */
    public function about()
    {
        return $this->decodeResponse(
            $this->http()->get('/about')
        );
    }

    /**
     * 获取指定 session 的配置.
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96%E6%8C%87%E5%AE%9Asession%E7%9A%84%E9%85%8D%E7%BD%AE
     *
     * @param mixed $sessionKey
     * @return array
     */
    public function config($sessionKey)
    {
        return $this->decodeResponse(
            $this->http()->get('/config', ['query' => compact('sessionKey')])
        );
    }

    /**
     * 设置指定 session 的配置.
     * @see https://github.com/project-mirai/mirai-api-http#%E8%AE%BE%E7%BD%AE%E6%8C%87%E5%AE%9Asession%E7%9A%84%E9%85%8D%E7%BD%AE
     *
     * @param mixed $sessionKey
     * @param mixed $cacheSize
     * @param mixed $enableWebsocket
     * @return array
     */
    public function setConfig($sessionKey, $cacheSize, $enableWebsocket)
    {
        return $this->decodeResponse(
            $this->http()->json('/config', compact('sessionKey', 'cacheSize', 'enableWebsocket'))
        );
    }

    /**
     * 注册指令.
     * @see https://github.com/project-mirai/mirai-api-http#%E6%B3%A8%E5%86%8C%E6%8C%87%E4%BB%A4
     *
     * @param mixed $name
     * @param mixed $alias
     * @param mixed $description
     * @param mixed $usage
     * @return array
     */
    public function registerCommand($name, $alias, $description, $usage)
    {
        $authKey = $this->bot->getAuthKey();

        return $this->decodeResponse(
            $this->http()->json('/command/register', compact('authKey', 'name', 'alias', 'description', 'usage'))
        );
    }

    /**
     * 发送指令.
     * @see https://github.com/project-mirai/mirai-api-http#%E5%8F%91%E9%80%81%E6%8C%87%E4%BB%A4
     *
     * @param mixed $name
     * @param mixed $args
     * @return array
     */
    public function sendCommand($name, $args)
    {
        $authKey = $this->bot->getAuthKey();

        return $this->decodeResponse(
            $this->http()->json('/command/send', compact('authKey', 'name', 'args'))
        );
    }

    /**
     * 获取 managers.
     * @see https://github.com/project-mirai/mirai-api-http#%E8%8E%B7%E5%8F%96mangers
     *
     * @param mixed $qq
     * @return array
     */
    public function managers($qq)
    {
        return $this->decodeResponse(
            $this->http()->get('/managers', ['query' => compact('qq')])
        );
    }
}
