<?php

use Entities\User;
use Twig\Environment;
use Twig\loader\FilesystemLoader;

require __DIR__ . '/../../vendor/autoload.php';

$loader = new FilesystemLoader(__DIR__ . '/../Presentation');
$twig = new Environment($loader);

include(__DIR__ . '/../Functions/normalize.php');

$message = "";
$errorMessages = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $normalizedData = normalize_submitted_data($_POST);

    $formErrors = validate_normalized_data($normalizedData);

    if (count($formErrors) === 0) {
        $user = new User($normalizedData["firstName"], $normalizedData["lastName"]);
        $message = $user->greetUser();
    } else{
        $errorMessages = $formErrors;
    }
}

echo $twig->render('addUser.twig', ['message' => $message, 'errors' => $errorMessages]);
