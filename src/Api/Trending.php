<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

class Trending extends AbstractApi
{
    public const BASE_URI = 'trending';

    public const MEDIA_TYPE_ALL = 'all';
    public const MEDIA_TYPE_MOVIE = 'movie';
    public const MEDIA_TYPE_PERSON = 'person';
    public const MEDIA_TYPE_TV = 'tv';

    public const TIME_WINDOW_DAY = 'day';
    public const TIME_WINDOW_WEEK = 'week';

    public function __invoke(string $mediaType, string $timeWindow): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%s/%s', self::BASE_URI, $mediaType, $timeWindow));
    }
}
