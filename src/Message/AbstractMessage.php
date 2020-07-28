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

abstract class AbstractMessage implements MessageInterface
{
    /**
     * @var array
     */
    protected $raw;

    /**
     * @var string
     */
    protected $type;

    public function __construct(array $raw = [])
    {
        $this->raw = $raw;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function toArray(): array
    {
        return array_merge($this->raw, ['type' => $this->type()]);
    }

    public function getRawValue(string $key, $default = null)
    {
        return $this->raw[$key] ?? $default;
    }
}
