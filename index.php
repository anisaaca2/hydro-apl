<!-- Ini adalah Router -->

<?php
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

$basePath = '/hydro-apl';
$uri = str_replace($basePath, '', $uri);

$uri = strtok($uri, '?');

if ($uri === '/' || $uri === '/index.php') {
    require 'app/Controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
} elseif ($uri === '/produk') {
    require 'app/Controllers/ProdukController.php';
    $controller = new ProdukController();
    $controller->index();
} else {
    http_response_code(404);
    echo "404 - Halaman Tidak Ditemukan";
}
