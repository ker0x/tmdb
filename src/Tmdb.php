<?php

declare(strict_types=1);

namespace Kerox\Tmdb;

use Kerox\Tmdb\Api\Collections;
use Kerox\Tmdb\Api\Companies;
use Kerox\Tmdb\Api\Discover;
use Kerox\Tmdb\Api\Find;
use Kerox\Tmdb\Api\Genres;
use Kerox\Tmdb\Api\Movies;
use Kerox\Tmdb\Api\Networks;
use Kerox\Tmdb\Api\People;
use Kerox\Tmdb\Api\Reviews;
use Kerox\Tmdb\Api\Search;
use Kerox\Tmdb\Api\Trending;
use Kerox\Tmdb\Api\Tv;
use Kerox\Tmdb\Api\TvEpisodeGroups;
use Kerox\Tmdb\Api\TvEpisodes;
use Kerox\Tmdb\Api\TvSeasons;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\ResponseInterface;

final class Tmdb
{
    public const API_URL = 'https://api.themoviedb.org';
    public const API_VERSION = '3';

    public function __construct(
        private readonly string $token,
        private readonly ClientInterface $client,
    ) {
    }

    public function collections(): Collections
    {
        return new Collections($this->token, $this->client);
    }

    public function companies(): Companies
    {
        return new Companies($this->token, $this->client);
    }

    public function discover(): Discover
    {
        return new Discover($this->token, $this->client);
    }

    public function find(string $externalId, string $externalSource = Find::EXT_IMDB_ID): ResponseInterface
    {
        return (new Find($this->token, $this->client))($externalId, $externalSource);
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

    public function people(): People
    {
        return new People($this->token, $this->client);
    }

    public function reviews(string $reviewId): ResponseInterface
    {
        return (new Reviews($this->token, $this->client))($reviewId);
    }

    public function search(): Search
    {
        return new Search($this->token, $this->client);
    }

    public function trending(
        string $mediaType = Trending::MEDIA_TYPE_ALL,
        string $timeWindow = Trending::TIME_WINDOW_DAY
    ): ResponseInterface {
        return (new Trending($this->token, $this->client))($mediaType, $timeWindow);
    }

    public function tv(): Tv
    {
        return new Tv($this->token, $this->client);
    }

    public function tvSeasons(): TvSeasons
    {
        return new TvSeasons($this->token, $this->client);
    }

    public function tvEpisodes(): TvEpisodes
    {
        return new TvEpisodes($this->token, $this->client);
    }

    public function tvEpisodeGroups(string $episodeGroupId): ResponseInterface
    {
        return (new TvEpisodeGroups($this->token, $this->client))($episodeGroupId);
    }
}
