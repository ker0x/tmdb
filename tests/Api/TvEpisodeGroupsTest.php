<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

final class TvEpisodeGroupsTest extends AbstractApiTest
{
    public function testGet(): void
    {
        $response = $this->tmdb->tvEpisodeGroups('5de6e7f511386c00135456a1');

        self::assertSame(200, $response->getStatusCode());
        self::assertNotEmpty($response->getBody()->getContents());
    }
}
