<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class TvEpisodes extends AbstractApi
{
    public const BASE_URI = TvSeasons::BASE_URI.'/%d/episode';

    public function get(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d', $tvId, $seasonNumber, $episodeNumber));
    }

    public function changes(int $episodeId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('tv/episode/%d/changes', $episodeId));
    }

    public function credits(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/credits', $tvId, $seasonNumber, $episodeNumber));
    }

    public function externalIds(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/external_ids', $tvId, $seasonNumber, $episodeNumber));
    }

    public function images(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/images', $tvId, $seasonNumber, $episodeNumber));
    }

    public function translations(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/translations', $tvId, $seasonNumber, $episodeNumber));
    }

    public function videos(int $tvId, int $seasonNumber, int $episodeNumber): ResponseInterface
    {
        return $this->sendGetRequest(sprintf(self::BASE_URI.'/%d/videos', $tvId, $seasonNumber, $episodeNumber));
    }
}
