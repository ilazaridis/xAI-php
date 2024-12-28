<?php

declare(strict_types=1);

namespace Ounos\XAiPhp\Response;

final class Choice
{
    public int $index;
    /** @var array<Message> */
    public array $message;
    public string $finish_reason;
}