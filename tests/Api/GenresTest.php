<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class GenresTest extends AbstractApiTest
{
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
