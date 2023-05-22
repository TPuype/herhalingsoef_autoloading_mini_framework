<?php

use Twig\Environment;
use Twig\loader\FilesystemLoader;

require __DIR__ . '/../../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/../Presentation');
$twig = new Environment($loader);


echo $twig->render('homepage.twig');