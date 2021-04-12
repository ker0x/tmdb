<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class TvTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->tv()->get(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAggregateCredits(): void
    {
        $response = $this->tmdb->tv()->aggregateCredits(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAlternativeTitles(): void
    {
        $response = $this->tmdb->tv()->alternativeTitles(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetChanges(): void
    {
        $response = $this->tmdb->tv()->changes(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetContentRatings(): void
    {
        $response = $this->tmdb->tv()->contentRatings(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetCredits(): void
    {
        $response = $this->tmdb->tv()->credits(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetEpisodeGroups(): void
    {
        $response = $this->tmdb->tv()->episodeGroups(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetExternalIds(): void
    {
        $response = $this->tmdb->tv()->externalIds(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImages(): void
    {
        $response = $this->tmdb->tv()->images(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetKeywords(): void
    {
        $response = $this->tmdb->tv()->keywords(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetRecommendations(): void
    {
        $response = $this->tmdb->tv()->recommendations(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetReviews(): void
    {
        $response = $this->tmdb->tv()->reviews(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetScreenedTheatrically(): void
    {
        $response = $this->tmdb->tv()->screenedTheatrically(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetSimilar(): void
    {
        $response = $this->tmdb->tv()->similar(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTranslations(): void
    {
        $response = $this->tmdb->tv()->translations(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetVideos(): void
    {
        $response = $this->tmdb->tv()->videos(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetWatchProviders(): void
    {
        $response = $this->tmdb->tv()->watchProviders(4087);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetLatest(): void
    {
        $response = $this->tmdb->tv()->latest();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAiringToday(): void
    {
        $response = $this->tmdb->tv()->airingToday();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetOnTheAir(): void
    {
        $response = $this->tmdb->tv()->onTheAir();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetPopular(): void
    {
        $response = $this->tmdb->tv()->popular();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTopRated(): void
    {
        $response = $this->tmdb->tv()->topRated();

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
