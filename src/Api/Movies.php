<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Movies extends AbstractApi
{
    public const BASE_URI = 'movie';

    public function get(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $movieId));
    }

    public function credits(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/credits', self::BASE_URI, $movieId));
    }

    public function externalIds(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/external_ids', self::BASE_URI, $movieId));
    }

    public function images(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $movieId));
    }

    public function keywords(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/keywords', self::BASE_URI, $movieId));
    }

    public function lists(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/lists', self::BASE_URI, $movieId));
    }

    public function recommendations(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/recommendations', self::BASE_URI, $movieId));
    }

    public function releaseDates(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/release_dates', self::BASE_URI, $movieId));
    }

    public function reviews(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/reviews', self::BASE_URI, $movieId));
    }

    public function similar(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/similar', self::BASE_URI, $movieId));
    }

    public function translations(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/translations', self::BASE_URI, $movieId));
    }

    public function videos(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/videos', self::BASE_URI, $movieId));
    }

    public function watchProviders(int $movieId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/watch/providers', self::BASE_URI, $movieId));
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
