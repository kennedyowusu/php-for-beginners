<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
 '/php/' => 'index.php',
 '/php/about' => 'about.php',
 '/php/contact' => 'contact.php'
];

function pageNotFound($abortCode = 404)
{
 http_response_code($abortCode);
 require "controllers/404.php";
 die();
}

function routeToController($uri, $routes)
{
 if (array_key_exists($uri, $routes)) {
  require "controllers/{$routes[$uri]}";
 } else {
  pageNotFound();
 }
}

routeToController($uri, $routes);
