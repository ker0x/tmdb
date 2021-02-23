<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class MoviesTest extends AbstractApiTest
{
    public function testGetById(): void
    {
        $response = $this->tmdb->movies()->get(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCredits(): void
    {
        $response = $this->tmdb->movies()->credits(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetLatest(): void
    {
        $response = $this->tmdb->movies()->latest();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetNowPlaying(): void
    {
        $response = $this->tmdb->movies()->nowPlaying();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetPopular(): void
    {
        $response = $this->tmdb->movies()->popular();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTopRated(): void
    {
        $response = $this->tmdb->movies()->topRated();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetUpcoming(): void
    {
        $response = $this->tmdb->movies()->upcoming();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
