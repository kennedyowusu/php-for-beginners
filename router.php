<?php

$routes = require_once ("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

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

function abort($code = 404)
{
 http_response_code($code);
 require "controllers/{$code}.php";
 die();
}

routeToController($uri, $routes);
