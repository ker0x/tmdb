<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class MoviesTest extends AbstractApiTest
{
    public function testGetById()
    {
        $response = $this->tmdb->movies()->get(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCredits()
    {
        $response = $this->tmdb->movies()->credits(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetLatest()
    {
        $response = $this->tmdb->movies()->latest();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetNowPlaying()
    {
        $response = $this->tmdb->movies()->nowPlaying();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetPopular()
    {
        $response = $this->tmdb->movies()->popular();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTopRated()
    {
        $response = $this->tmdb->movies()->topRated();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetUpcoming()
    {
        $response = $this->tmdb->movies()->upcoming();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
