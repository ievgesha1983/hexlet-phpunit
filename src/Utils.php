<?php

namespace Hexlet\Phpunit\Utils;

function reverseString($string): string
{
    return implode(array_reverse(mb_str_split($string)));
}
