<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class GenresTest extends AbstractApiTest
{
    public function testGetMovieList(): void
    {
        $response = $this->tmdb->genres()->movieList();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTvList(): void
    {
        $response = $this->tmdb->genres()->tvList();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
