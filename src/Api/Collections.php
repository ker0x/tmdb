<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Collections extends AbstractApi
{
    public const BASE_URI = 'collection';

    public function get(int $collectionId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $collectionId));
    }

    public function images(int $collectionId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $collectionId));
    }

    public function translations(int $collectionId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/translations', self::BASE_URI, $collectionId));
    }
}
