<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class CollectionsTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->collections()->get(8091);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetImagesById(): void
    {
        $response = $this->tmdb->collections()->images(8091);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }

    public function testGetTranslationsById(): void
    {
        $response = $this->tmdb->collections()->translations(8091);

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
