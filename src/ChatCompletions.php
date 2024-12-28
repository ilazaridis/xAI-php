<?php

declare(strict_types=1);

namespace Ounos\XAiPhp;

final class ChatCompletions
{
    public function __construct(
        protected array $messages,
        protected string $model,
        protected float $frequency_penalty = 0,
        protected string $logit_bias = '',
        protected bool $logprobs = false,
        protected int $max_tokens = 0,
        protected int $n = 0,
        protected float $presence_penalty = 0,
        protected null $response_format = null,
        protected int $seed = 0,
        protected array $stop = [],
        protected bool $stream = false,
        protected null $stream_options = null,
        protected float $temperature = 0,
        protected null $tool_choice = null,
        protected array $tools = [],
        protected int $top_logprobs = 0,
        protected float $top_p = 0,
        protected string $user = '',
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