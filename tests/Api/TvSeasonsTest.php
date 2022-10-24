<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class TvSeasonsTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->tvSeasons()->get(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAggregateCredits(): void
    {
        $response = $this->tmdb->tvSeasons()->aggregateCredits(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetChanges(): void
    {
        $response = $this->tmdb->tvSeasons()->changes(12078);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCredits(): void
    {
        $response = $this->tmdb->tvSeasons()->credits(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetExternalIds(): void
    {
        $response = $this->tmdb->tvSeasons()->externalIds(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImages(): void
    {
        $response = $this->tmdb->tvSeasons()->images(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTranslations(): void
    {
        $response = $this->tmdb->tvSeasons()->translations(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetVideos(): void
    {
        $response = $this->tmdb->tvSeasons()->videos(4087, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
