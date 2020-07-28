<?php

declare(strict_types=1);
/**
 * This file is part of qbhy/mirai-php.
 *
 * @link     https://github.com/qbhy/mirai-php
 * @document https://github.com/qbhy/mirai-php/blob/master/README.md
 * @contact  qbhy0715@qq.com
 * @license  https://github.com/qbhy/mirai-php/blob/master/LICENSE
 */

namespace Qbhy\Mirai\Event;

abstract class AbstractEvent implements EventInterface
{
    /**
     * @var array
     */
    protected $raw;

    public function __construct(array $raw = [])
    {
        $this->raw = $raw;
    }

    public function __call($name, $arguments)
    {
        return $this->getRawValue($name, $arguments[0] ?? null);
    }

    public function type(): string
    {
        return array_flip(EventConst::CLASS_MAP)[self::class];
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
