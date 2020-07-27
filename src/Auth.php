<?php

namespace Qbhy\Mirai;

/**
 * @link https://github.com/project-mirai/mirai-api-http#%E8%AE%A4%E8%AF%81%E7%9B%B8%E5%85%B3
 * Class Auth
 * @package Qbhy\Mirai
 */
class Auth extends Module
{
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
     * @return array
     */
    public function verify($session, $qq)
    {
        return $this->decodeResponse(
            $this->http()->json('/verify', [
                'sessionKey' => $session,
                'qq' => $qq,
            ])
        );
    }


    /**
     * @see https://github.com/project-mirai/mirai-api-http#%E6%A0%A1%E9%AA%8Csession
     *
     * @return array
     */
    public function release($session, $qq)
    {
        return $this->decodeResponse(
            $this->http()->json('/release', [
                'sessionKey' => $session,
                'qq' => $qq,
            ])
        );
    }

}
