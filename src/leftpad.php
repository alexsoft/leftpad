<?php

if (!function_exists('leftpad')) {
    /**
     * @param   string   $string
     * @param   int      $length
     * @param   string   $filler
     * @return  string
     */
    function leftpad($string, $length, $filler = ' ') {
        return str_pad($string, $length, substr($filler, 0, 1), STR_PAD_LEFT);
    }
}
