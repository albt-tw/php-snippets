<?php

if (!function_exists('str_datetime')) {
    function str_datetime($timestamp = null, $delimiter = '-')
    {
        $timestamp = $timestamp ?: time();
        return date("Y${delimiter}m${delimiter}d H:i:s", $timestamp);
    }
}
