<?php

function activeUrl($path) {
 return $_SERVER['REQUEST_URI'] === $path ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
}
function activeTitle($title) {
 return $GLOBALS['title'] === $title ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
}
