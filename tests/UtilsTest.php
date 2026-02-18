<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\reverseString;
use function Hexlet\Phpunit\Tests\Utils\getFixturesFullPath;

class UtilsTest extends TestCase
{
    public function testReverse(): void
    {
        $this->assertEquals('', reverseString(''));

        $this->assertEquals('olleh', reverseString('hello'));

        $bigText = file_get_contents(getFixturesFullPath('BigText.txt'));
        $reverseBigText = file_get_contents(getFixturesFullPath('ReverseBigText.txt'));
        $this->assertEquals($reverseBigText, reverseString($bigText));
    }
}
