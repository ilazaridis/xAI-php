<?php

declare(strict_types=1);

namespace Ounos\XAiPhp\Response;

final readonly class ChatCompletionsResponse
{
    public function __construct(
        protected Message $message = new Message(),
        protected Choice  $choice = new Choice()
    ){}

    /**
     * @return array<Choice>
     */
    public static function fromArray(array $params): array
    {
        $ccr = new ChatCompletionsResponse();
        $choices = [];

        foreach ($params['choices'] as $c) {
            $ccr->choice->index = $c['index'];
            $ccr->choice->finish_reason = $c['finish_reason'];
            $ccr->message->role = $c['message']['role'];
            $ccr->message->content = $c['message']['content'];
            $ccr->message->refusal = $c['message']['refusal'];
            $ccr->choice->message[] = $ccr->message;
            $choices[] = $ccr->choice;
        }

        return $choices;
    }
}