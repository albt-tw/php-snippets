<?php

foreach(glob(__DIR__.'/Helpers/*.php') as $file) {
    is_file($file) and include($file);
}
