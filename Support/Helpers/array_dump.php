<?php

if (!function_exists('array_dump')) {
    function array_dump($arr)
    {
        $str = var_export($arr, 1);
        $str = substr($str, 7, strlen($str)-8);
        $str = preg_replace('/^(\s*)\),$/m', '$1],', $str);
        $str = preg_replace('/=>\s*array \((\s*(\],))?/', '=> [$2', $str);
        $str = "[" . $str . "];\n";

        return $str;
    }
}
