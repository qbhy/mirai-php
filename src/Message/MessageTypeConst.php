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

namespace Qbhy\Mirai\Message;

/**
 * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md
 * Class MessageTypeConst
 */
class MessageTypeConst
{
    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#source
     */
    const SOURCE = 'Source';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#quote
     */
    const QUOTE = 'Quote';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#at
     */
    const AT = 'At';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#atall
     */
    const AT_ALL = 'AtAll';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#face
     */
    const FACE = 'Face';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#plain
     */
    const PLAIN = 'Plain';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#image
     */
    const IMAGE = 'Image';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#flashimage
     */
    const FLASH_IMAGE = 'FlashImage';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#xml
     */
    const XML = 'Xml';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#json
     */
    const JSON = 'Json';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#app
     */
    const APP = 'App';

    /**
     * @see https://github.com/project-mirai/mirai-api-http/blob/master/MessageType.md#poke
     */
    const POKE = 'Poke';
}
