<?php

$helpers = config('app.helpers');

foreach ($helpers as $helperFileName) {
    $file = __DIR__ . '/Helpers/'. $helperFileName . '.php';
    file_exists($file) and include($file);
}
