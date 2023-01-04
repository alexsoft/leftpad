<?php

declare(strict_types=1);

if (!function_exists('leftpad')) {
    function leftpad(string $string, int $length, string $filler = ' '): string
    {
        return str_pad($string, $length, $filler, STR_PAD_LEFT);
    }
}
