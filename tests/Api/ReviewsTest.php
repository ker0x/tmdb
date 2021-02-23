<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class ReviewsTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->reviews('5013bc76760ee372cb00253e');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
