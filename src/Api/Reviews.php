<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

class Reviews extends AbstractApi
{
    private const BASE_URI = 'review';

    public function __invoke(string $reviewId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%s', self::BASE_URI, $reviewId));
    }
}
