<?php

declare(strict_types=1);

namespace {
    if (!function_exists('leftpad')) {
        /**
         * @deprecated 1.1.0 Use namespaced function \Alexsoft\Leftpad\leftpad()
         */
        function leftpad(string $string, int $length, string $filler = ' '): string
        {
            return \Alexsoft\Leftpad\leftpad($string, $length, $filler);
        }
    }
}

namespace Alexsoft\Leftpad {
    function leftpad(string $string, int $length, string $filler = ' '): string
    {
        return str_pad($string, $length, $filler, STR_PAD_LEFT);
    }
}
