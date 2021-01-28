<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Genres extends AbstractApi
{
    public const BASE_URI = 'genre';

    public function movieList(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/movie/list', self::BASE_URI));
    }

    public function tvList(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/tv/list', self::BASE_URI));
    }
}
