<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . '/api/fileAnalyzer.php';

$loader = new \Twig\Loader\FilesystemLoader('src/templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
]);

SimpleRouter::get('/', function () use ($twig) {
    return $twig->render('pages/index.html.twig');
});

SimpleRouter::post('/api/analyze', function () {
    $file = $_FILES['file'] ?? null;
    $response = showFileMetadata($file);
    return $response;
});

SimpleRouter::error(function () use ($twig) {
    SimpleRouter::response()->httpCode(404);
    echo $twig->render('pages/404.html.twig');
});
