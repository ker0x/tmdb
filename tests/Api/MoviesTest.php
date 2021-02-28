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

    public function testGetExternalIds(): void
    {
        $response = $this->tmdb->movies()->externalIds(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImages(): void
    {
        $response = $this->tmdb->movies()->images(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetKeywords(): void
    {
        $response = $this->tmdb->movies()->keywords(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetLists(): void
    {
        $response = $this->tmdb->movies()->lists(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetRecommendations(): void
    {
        $response = $this->tmdb->movies()->recommendations(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetReleaseDates(): void
    {
        $response = $this->tmdb->movies()->releaseDates(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetReviews(): void
    {
        $response = $this->tmdb->movies()->reviews(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetSimilar(): void
    {
        $response = $this->tmdb->movies()->similar(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTranslations(): void
    {
        $response = $this->tmdb->movies()->translations(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetVideos(): void
    {
        $response = $this->tmdb->movies()->videos(300);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetWatchProviders(): void
    {
        $response = $this->tmdb->movies()->watchProviders(300);

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
