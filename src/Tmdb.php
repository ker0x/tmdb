<?php

declare(strict_types=1);

namespace Kerox\Tmdb;

use Kerox\Tmdb\Api\Companies;
use Kerox\Tmdb\Api\Genres;
use Kerox\Tmdb\Api\Movies;
use Psr\Http\Client\ClientInterface;

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
}
