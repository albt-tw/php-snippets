<?php

if (!function_exists('json_encode_pretty')) {
    function json_encode_pretty($arr)
    {
        return json_encode($arr, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
