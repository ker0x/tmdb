<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class SearchTest extends AbstractApiTest
{
    public function testSearchCompanies(): void
    {
        $response = $this->tmdb->search()->company('Warner');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchCollection(): void
    {
        $response = $this->tmdb->search()->collection('Alien');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchKeywords(): void
    {
        $response = $this->tmdb->search()->keyword('fantastic');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchMovie(): void
    {
        $response = $this->tmdb->search()->movie('Alien');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchMulti(): void
    {
        $response = $this->tmdb->search()->multi('Warner');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchPerson(): void
    {
        $response = $this->tmdb->search()->person('Steven Spielberg');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchTv(): void
    {
        $response = $this->tmdb->search()->tv('Lost');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
