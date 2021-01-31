<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

use Kerox\Tmdb\Tmdb;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Psr18Client;

class SearchTest extends TestCase
{
    protected Tmdb $tmdb;

    public function setUp(): void
    {
        $this->tmdb = new Tmdb(getenv('TMDB_API_TOKEN'), new Psr18Client());
    }

    public function testSearchCompanies()
    {
        $response = $this->tmdb->search()->company('Warner');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchCollection()
    {
        $response = $this->tmdb->search()->collection('Alien');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchKeywords()
    {
        $response = $this->tmdb->search()->keyword('fantastic');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchMovie()
    {
        $response = $this->tmdb->search()->movie('Alien');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchMulti()
    {
        $response = $this->tmdb->search()->multi('Warner');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchPerson()
    {
        $response = $this->tmdb->search()->person('Steven Spielberg');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testSearchTv()
    {
        $response = $this->tmdb->search()->tv('Lost');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
