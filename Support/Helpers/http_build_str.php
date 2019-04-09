<?php

if (!function_exists('http_build_str')) {
    function http_build_str(array $query, $prefix = '', $separator = '&')
    {
        return urldecode(http_build_query($query, $prefix, $separator));
    }
}
