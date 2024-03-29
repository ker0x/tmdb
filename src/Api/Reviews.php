<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Reviews extends AbstractApi
{
    public const BASE_URI = 'review';

    public function __invoke(string $reviewId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%s', self::BASE_URI, $reviewId));
    }
}
