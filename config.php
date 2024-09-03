<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

if ($_ENV['ENVIRONMENT'] === 'production' || $_ENV['ENVIRONMENT'] === 'prod') {
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
}