<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

class NetworksTest extends AbstractApiTest
{
    public function testGetById(): void
    {
        $response = $this->tmdb->networks()->get(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetAlternativeNameById(): void
    {
        $response = $this->tmdb->networks()->alternativeNames(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImagesById(): void
    {
        $response = $this->tmdb->networks()->images(20);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
