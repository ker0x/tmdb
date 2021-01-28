<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

use Kerox\Tmdb\Tmdb;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Psr18Client;

class GenresTest extends TestCase
{
    protected Tmdb $tmdb;

    public function setUp(): void
    {
        $this->tmdb = new Tmdb(getenv('TMDB_API_TOKEN'), new Psr18Client());
    }

    public function testGetMovieList()
    {
        $response = $this->tmdb->genres()->movieList();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTvList()
    {
        $response = $this->tmdb->genres()->tvList();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
