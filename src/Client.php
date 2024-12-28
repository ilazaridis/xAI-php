<?php

declare(strict_types=1);

namespace Ounos\XAiPhp;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

class Client
{
    private GuzzleClient $client;
    public function __construct()
    {
        $this->client = new GuzzleClient(['base_uri' => getenv('XAI_BASE_URI')]);
    }

    public function chatCompletions(ChatCompletions $request): ResponseInterface
    {
        return $this->client
            ->request(
                method: 'POST',
                uri: 'v1/chat/completions',
                options: [
                    RequestOptions::HEADERS => ['authorization' => 'Bearer ' . getenv('XAI_ACCESS_TOKEN')],
                    RequestOptions::JSON => $request->toArray(),
                ]
            );
    }
}