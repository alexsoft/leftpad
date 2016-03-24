<?php

if (!function_exists('leftpad')) {
    /**
     * @param   string   $string
     * @param   int      $length
     * @param   string   $filler
     * @return  string
     */
    function leftpad($string, $length, $filler = ' ') {
        $i = -1;

        $len = $length - mb_strlen($string);

        while (++$i < $len) {
            $string = $filler . $string;
        }

        return $string;
    }
}