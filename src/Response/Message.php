<?php

declare(strict_types=1);

namespace Ounos\XAiPhp\Response;

final class Message
{
    public string $role;
    public string $content;
    public ?string $refusal;
}