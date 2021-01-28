<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Companies extends AbstractApi
{
    public const BASE_URI = 'company';

    public function get(int $companyId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d', self::BASE_URI, $companyId));
    }

    public function alternativeNames(int $companyId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/alternative_names', self::BASE_URI, $companyId));
    }

    public function images(int $companyId): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%d/images', self::BASE_URI, $companyId));
    }
}
