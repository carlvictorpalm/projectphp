<?php

// Sökväg till grundmappen i projektet
$baseDir = __DIR__ . '/.';

// Ladda in Composers autoload-fil
//require $baseDir . '/vendor/autoload.php';

// Ladda konfigurationsdata
$config = require $baseDir . 'Controller/config.php';

// Normalisera url-sökvägar
$path = function($uri) {
    return ($uri == "/") ? $uri : rtrim($uri, '/');
};

// Routing
$controller = new Controller($baseDir);
switch ($path($_SERVER['REQUEST_URI'])) {
    case '/':
        $controller->index();
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}