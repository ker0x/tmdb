<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Networks extends AbstractApi
{
    public const BASE_URI = 'network';

    public function get(int $networkId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $networkId));
    }

    public function alternativeNames(int $networkId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/alternative_names', self::BASE_URI, $networkId));
    }

    public function images(int $networkId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $networkId));
    }
}
