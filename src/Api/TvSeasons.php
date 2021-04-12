<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class TvSeasons extends AbstractApi
{
    public const BASE_URI = Tv::BASE_URI.'/%d/season';

    public function get(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d', $tvId, $seasonNumber));
    }

    public function aggregateCredits(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/aggregate_credits', $tvId, $seasonNumber));
    }

    public function changes(int $seasonId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('tv/season/%d/changes', $seasonId));
    }

    public function credits(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/credits', $tvId, $seasonNumber));
    }

    public function externalIds(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/external_ids', $tvId, $seasonNumber));
    }

    public function images(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/images', $tvId, $seasonNumber));
    }

    public function translations(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/translations', $tvId, $seasonNumber));
    }

    public function videos(int $tvId, int $seasonNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/videos', $tvId, $seasonNumber));
    }
}
