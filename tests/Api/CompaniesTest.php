<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class CompaniesTest extends AbstractApiTest
{
    public function testGetById()
    {
        $response = $this->tmdb->companies()->get(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAlternativeNameById()
    {
        $response = $this->tmdb->companies()->alternativeNames(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImagesById()
    {
        $response = $this->tmdb->companies()->images(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
