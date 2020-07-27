<?php


namespace Qbhy\Mirai\Message;


interface MessageInterface
{
    public function type(): string;

    public function toArray(): array;
}