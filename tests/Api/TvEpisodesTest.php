<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class TvEpisodesTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->tvEpisodes()->get(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetChanges(): void
    {
        $response = $this->tmdb->tvEpisodes()->changes(283988);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCredits(): void
    {
        $response = $this->tmdb->tvEpisodes()->credits(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetExternalIds(): void
    {
        $response = $this->tmdb->tvEpisodes()->externalIds(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImages(): void
    {
        $response = $this->tmdb->tvEpisodes()->images(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTranslations(): void
    {
        $response = $this->tmdb->tvEpisodes()->translations(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetVideos(): void
    {
        $response = $this->tmdb->tvEpisodes()->videos(4087, 1, 1);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
