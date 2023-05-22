<?php

require __DIR__ . '/../../vendor/autoload.php';

use Twig\Environment;
use Twig\loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../Presentation');
$twig = new Environment($loader);

echo $twig->render('pageOne.twig');