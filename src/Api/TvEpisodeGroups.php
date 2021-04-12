<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class TvEpisodeGroups extends AbstractApi
{
    public const BASE_URI = 'tv/episode_group';

    public function __invoke(string $episodeGroupId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%s', self::BASE_URI, $episodeGroupId));
    }
}
