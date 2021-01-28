<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Movies extends AbstractApi
{
    private const BASE_URI = 'movie';

    public function get(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $movieId));
    }

    public function latest(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('/%s/latest', self::BASE_URI));
    }

    public function nowPlaying(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/now_playing', self::BASE_URI));
    }

    public function popular(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/popular', self::BASE_URI));
    }

    public function topRated(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/top_rated', self::BASE_URI));
    }

    public function upcoming(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/upcoming', self::BASE_URI));
    }
}
