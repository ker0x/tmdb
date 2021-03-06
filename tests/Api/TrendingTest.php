<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class TrendingTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->trending();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
