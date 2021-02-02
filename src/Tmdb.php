<?php

declare(strict_types=1);

namespace Kerox\Tmdb;

use Kerox\Tmdb\Api\Companies;
use Kerox\Tmdb\Api\Genres;
use Kerox\Tmdb\Api\Movies;
use Kerox\Tmdb\Api\Networks;
use Kerox\Tmdb\Api\Reviews;
use Kerox\Tmdb\Api\Search;
use Kerox\Tmdb\Api\Trending;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

final class Tmdb
{
    public const API_URL = 'https://api.themoviedb.org';
    public const API_VERSION = '3';

    public function __construct(
        private string $token,
        private ClientInterface $client,
    ) {
    }

    public function companies(): Companies
    {
        return new Companies($this->token, $this->client);
    }

    public function genres(): Genres
    {
        return new Genres($this->token, $this->client);
    }

    public function movies(): Movies
    {
        return new Movies($this->token, $this->client);
    }

    public function networks(): Networks
    {
        return new Networks($this->token, $this->client);
    }

    public function reviews(string $reviewId): ResponseInterface
    {
        $reviews = new Reviews($this->token, $this->client);

        return $reviews($reviewId);
    }

    public function search(): Search
    {
        return new Search($this->token, $this->client);
    }

    public function trending(
        string $mediaType = Trending::MEDIA_TYPE_ALL,
        string $timeWindow = Trending::TIME_WINDOW_DAY
    ): ResponseInterface {
        $trending = new Trending($this->token, $this->client);

        return $trending($mediaType, $timeWindow);
    }
}
