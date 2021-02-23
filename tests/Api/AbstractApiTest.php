<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Tests\Api;

use Kerox\Tmdb\Tmdb;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpClient\Psr18Client;

abstract class AbstractApiTest extends TestCase
{
    protected Tmdb $tmdb;

    protected function setUp(): void
    {
        $this->tmdb = new Tmdb(getenv('TMDB_API_TOKEN'), new Psr18Client());
    }
}
