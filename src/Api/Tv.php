<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Tv extends AbstractApi
{
    public const BASE_URI = 'tv';

    public function get(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $tvId));
    }

    public function accountStates(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/account_states', self::BASE_URI, $tvId));
    }

    public function aggregateCredits(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/aggregate_credits', self::BASE_URI, $tvId));
    }

    public function alternativeTitles(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/alternative_titles', self::BASE_URI, $tvId));
    }

    public function changes(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/changes', self::BASE_URI, $tvId));
    }

    public function contentRatings(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/content_ratings', self::BASE_URI, $tvId));
    }

    public function credits(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/credits', self::BASE_URI, $tvId));
    }

    public function episodeGroups(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/episode_groups', self::BASE_URI, $tvId));
    }

    public function externalIds(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/external_ids', self::BASE_URI, $tvId));
    }

    public function images(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $tvId));
    }

    public function keywords(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/keywords', self::BASE_URI, $tvId));
    }

    public function recommendations(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/recommendations', self::BASE_URI, $tvId));
    }

    public function reviews(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/reviews', self::BASE_URI, $tvId));
    }

    public function screenedTheatrically(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/screened_theatrically', self::BASE_URI, $tvId));
    }

    public function similar(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/similar', self::BASE_URI, $tvId));
    }

    public function translations(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/translations', self::BASE_URI, $tvId));
    }

    public function videos(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/videos', self::BASE_URI, $tvId));
    }

    public function watchProviders(int $tvId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/watch/providers', self::BASE_URI, $tvId));
    }

    public function latest(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/latest', self::BASE_URI));
    }

    public function airingToday(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/airing_today', self::BASE_URI));
    }

    public function onTheAir(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/on_the_air', self::BASE_URI));
    }

    public function popular(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/popular', self::BASE_URI));
    }

    public function topRated(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/top_rated', self::BASE_URI));
    }
}
