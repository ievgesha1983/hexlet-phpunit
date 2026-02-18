<?php

namespace Hexlet\Phpunit\Tests\Utils;

function getFixturesFullPath(string $fixture): string
{
    return implode(DIRECTORY_SEPARATOR, [__DIR__, 'fixtures', $fixture]);
}