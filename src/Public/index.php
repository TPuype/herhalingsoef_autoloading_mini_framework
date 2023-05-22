<?php

include(__DIR__ . '/../../bootstrap.php');

require __DIR__ . '/../../vendor/autoload.php';

$urlMap = [
    '/' => 'homepage.php',
    '/pageOne' => 'pageOne.php',
    '/pageTwo' => 'pageTwo.php',
    '/pageThree' => 'pageThree.php',
    '/pageFour' => 'pageFour.php',
    '/addUser' => 'addUser.php',
];

$pathInfo = $_SERVER["PATH_INFO"] ?? '/';

if (isset($urlMap[$pathInfo])){
    include(__DIR__ . '/../Controllers/' . $urlMap[$pathInfo]);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . '404 Not found');
    include(__DIR__ . '/404.php');
    exit;
}