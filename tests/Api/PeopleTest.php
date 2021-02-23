<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class PeopleTest extends AbstractApiTest
{
    public function testGetById(): void
    {
        $response = $this->tmdb->people()->get(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetChangesById(): void
    {
        $response = $this->tmdb->people()->changes(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetMovieCreditsById(): void
    {
        $response = $this->tmdb->people()->movieCredits(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTvCreditsById(): void
    {
        $response = $this->tmdb->people()->tvCredits(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCombinedCreditsById(): void
    {
        $response = $this->tmdb->people()->combinedCredits(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetExternalIdsById(): void
    {
        $response = $this->tmdb->people()->externalIds(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImagesById(): void
    {
        $response = $this->tmdb->people()->images(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTaggedImagesById(): void
    {
        $response = $this->tmdb->people()->taggedImages(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGettranslationsById(): void
    {
        $response = $this->tmdb->people()->translations(488);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetLatest(): void
    {
        $response = $this->tmdb->people()->latest();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetPopular(): void
    {
        $response = $this->tmdb->people()->popular();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
