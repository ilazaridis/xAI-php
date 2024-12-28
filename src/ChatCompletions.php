<?php

declare(strict_types=1);

namespace Ounos\XAiPhp;

final class ChatCompletions
{
    public function __construct(
        protected array $messages,
        protected string $model,
        protected ?float $frequency_penalty = null,
        protected ?object $logit_bias = null,
        protected ?bool $logprobs = null,
        protected ?int $max_tokens = null,
        protected ?int $n = null,
        protected ?float $presence_penalty = null,
        protected null $response_format = null,
        protected ?int $seed = null,
        protected ?array $stop = [],
        protected ?bool $stream = false,
        protected null $stream_options = null,
        protected ?float $temperature = null,
        protected null $tool_choice = null,
        protected ?array $tools = [],
        protected ?int $top_logprobs = null,
        protected ?float $top_p = null,
        protected ?string $user = null,
    ) {
    }

    public function toArray(): array
    {
        return [
            'messages' => $this->messages,
            'model' => $this->model,
            'frequency_penalty' => $this->frequency_penalty,
            'logit_bias' => $this->logit_bias,
            'logprobs' => $this->logprobs,
            'max_tokens' => $this->max_tokens,
            'n' => $this->n,
            'presence_penalty' => $this->presence_penalty,
            'response_format' => $this->response_format,
            'seed' => $this->seed,
            'stop' => $this->stop,
            'stream' => $this->stream,
            'stream_options' => $this->stream_options,
            'temperature' => $this->temperature,
            'tool_choice' => $this->tool_choice,
            'tools' => $this->tools,
            'top_logprobs' => $this->top_logprobs,
            'top_p' => $this->top_p,
            'user' => $this->user,
        ];
    }
}