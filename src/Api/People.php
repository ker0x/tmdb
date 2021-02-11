<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class People extends AbstractApi
{
    public const BASE_URI = 'person';

    public function get(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $personId));
    }

    public function changes(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/changes', self::BASE_URI, $personId));
    }

    public function movieCredits(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/movie_credits', self::BASE_URI, $personId));
    }

    public function tvCredits(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/tv_credits', self::BASE_URI, $personId));
    }

    public function combinedCredits(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/combined_credits', self::BASE_URI, $personId));
    }

    public function externalIds(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/external_ids', self::BASE_URI, $personId));
    }

    public function images(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $personId));
    }

    public function taggedImages(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/tagged_images', self::BASE_URI, $personId));
    }

    public function translations(int $personId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/translations', self::BASE_URI, $personId));
    }

    public function latest(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/latest', self::BASE_URI));
    }

    public function popular(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/popular', self::BASE_URI));
    }
}
