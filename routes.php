<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . '/api/fileAnalyser.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);

SimpleRouter::get('/', function () use ($twig) {
    return $twig->render('pages/index.html.twig');
});

SimpleRouter::post('/api/analyse', function () {
    $file = $_FILES['file'];
    $response = showFileMetadata($file);
    return $response;
});

SimpleRouter::error(function () use ($twig) {
    SimpleRouter::response()->httpCode(404);
    echo $twig->render('pages/404.html.twig');
});
