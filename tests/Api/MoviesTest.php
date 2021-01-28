<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

use Kerox\Tmdb\Tmdb;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Psr18Client;

class MoviesTest extends TestCase
{
    protected Tmdb $tmdb;

    public function setUp(): void
    {
        $this->tmdb = new Tmdb(getenv('TMDB_API_TOKEN'), new Psr18Client());
    }

    public function testGetById()
    {
        $response = $this->tmdb->movies()->get(300);

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
