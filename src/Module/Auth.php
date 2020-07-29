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
 * @see https://github.com/project-mirai/mirai-api-http#%E8%AE%A4%E8%AF%81%E7%9B%B8%E5%85%B3
 * Class Auth
 */
class Auth extends Module
{
    protected $sessions = [];

    /**
     * 获取已经激活的sessionKey.
     */
    public function getSession($qq = null, $refresh = false)
    {
        if (is_bool($qq)) {
            $refresh = $qq;
            $qq = null;
        }

        if (isset($this->sessions[$qq]) && $refresh !== true && $qq !== true) {
            return $this->sessions[$qq];
        }

        $sessionKey = $this->session()['session'];
        $this->verify($sessionKey, $qq);

        $this->sessions[$qq] = $sessionKey;

        return $sessionKey;
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E5%BC%80%E5%A7%8B%E4%BC%9A%E8%AF%9D-%E8%AE%A4%E8%AF%81authorize
     *
     * @return array
     */
    public function session()
    {
        return $this->decodeResponse(
            $this->http()->json('/auth', [
                'authKey' => $this->bot->getAuthKey(),
            ])
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E6%A0%A1%E9%AA%8Csession
     *
     * @param  mixed  $sessionKey
     * @param  mixed  $qq
     * @return array
     */
    public function verify($sessionKey, $qq = null)
    {
        $qq = $qq ?? $this->bot->getQQ();
        return $this->decodeResponse(
            $this->http()->json('/verify', compact('sessionKey', 'qq'))
        );
    }

    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E6%A0%A1%E9%AA%8Csession
     *
     * @param  mixed  $sessionKey
     * @param  mixed  $qq
     * @return array
     */
    public function release($sessionKey, $qq)
    {
        return $this->decodeResponse(
            $this->http()->json('/release', compact('qq', 'sessionKey'))
        );
    }
}
