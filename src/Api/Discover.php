<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Discover extends AbstractApi
{
    public const BASE_URI = 'discover';

    public function movie(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/movie', self::BASE_URI));
    }

    public function tv(): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/tv', self::BASE_URI));
    }
}
