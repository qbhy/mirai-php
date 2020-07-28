<?php


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