<?php

use Pecee\SimpleRouter\SimpleRouter;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/src/routes.php';

SimpleRouter::start();
