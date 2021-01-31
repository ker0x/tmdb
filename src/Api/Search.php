<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Search extends AbstractApi
{
    private const BASE_URI = 'search';

    public function company(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/company', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function collection(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/collection', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function keyword(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/keyword', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function movie(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/movie', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function multi(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/multi', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function person(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/person', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }

    public function tv(string $query, int $page = 1): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/tv', self::BASE_URI), [
            'query' => $query,
            'page' => $page,
        ]);
    }
}
