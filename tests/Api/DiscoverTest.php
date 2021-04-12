<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class DiscoverTest extends AbstractApiTest
{
    public function testGetMovie(): void
    {
        $response = $this->tmdb->discover()->movie();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTv(): void
    {
        $response = $this->tmdb->discover()->tv();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
