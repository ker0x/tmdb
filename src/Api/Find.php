<?php

declare(strict_types=1);

namespace Kerox\Tmdb\Api;

use Psr\Http\Message\ResponseInterface;

final class Find extends AbstractApi
{
    public const BASE_URI = 'find';

    public const EXT_IMDB_ID = 'imdb_id';
    public const EXT_FREEBASE_MID = 'freebase_mid';
    public const EXT_FREEBASE_ID = 'freebase_id';
    public const EXT_TVDB_ID = 'tvdb_id';
    public const EXT_TVRAGE_ID = 'tvrage_id';
    public const EXT_FACEBOOK_ID = 'facebook_id';
    public const EXT_TWITTER_ID = 'twitter_id';
    public const EXT_INSTAGRAM_ID = 'instagram_id';

    public function __invoke(string $externalId, string $externalSource = self::EXT_IMDB_ID): ResponseInterface
    {
        return $this->sendGetRequest(sprintf('%s/%s', self::BASE_URI, $externalId), [
            'external_source' => $externalSource,
        ]);
    }
}
