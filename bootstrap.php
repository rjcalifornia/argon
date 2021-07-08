<?php

// Load our autoloader
require_once __DIR__.'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/resources');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);