<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Fig\Http\Message\RequestMethodInterface;
use Kerox\Tmdb\Tmdb;
use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Http\Message\UriInterface;

abstract class AbstractApi implements RequestFactoryInterface, UriFactoryInterface
{
    private Psr17Factory $factory;

    public function __construct(
        private string $token,
        private ClientInterface $client,
    ) {
        $this->factory = new Psr17Factory();
    }

    public function createUri(string $uri = '', array $queryParameters = []): UriInterface
    {
        $query = [];
        foreach ($queryParameters as $parameter => $value) {
            $query[] = sprintf('%s=%s', $parameter, urldecode((string) $value));
        }

        if (!empty($query)) {
            $uri = sprintf('%s?%s', $uri, implode('%', $query));
        }

        return $this->factory->createUri(
            sprintf(
                '%s/%s/%s',
                Tmdb::API_URL,
                Tmdb::API_VERSION,
                $uri,
            )
        );
    }

    public function createRequest(string $method, $uri): RequestInterface
    {
        if (!$uri instanceof UriInterface) {
            $uri = $this->createUri($uri);
        }

        return $this->factory->createRequest($method, $uri)
            ->withHeader('Authorization', sprintf('Bearer %s', $this->token))
            ->withHeader('Content-Type', 'application/json;charset=utf-8');
    }

    protected function sendGetRequest(string|UriInterface $uri): ResponseInterface
    {
        return $this->client->sendRequest(
            $this->createRequest(RequestMethodInterface::METHOD_GET, $uri)
        );
    }
}
