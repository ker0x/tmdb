<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class FindTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->find('tt0078748');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
