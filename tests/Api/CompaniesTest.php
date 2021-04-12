<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class CompaniesTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->companies()->get(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAlternativeNameById(): void
    {
        $response = $this->tmdb->companies()->alternativeNames(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImagesById(): void
    {
        $response = $this->tmdb->companies()->images(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
