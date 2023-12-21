<?php 

require_once __DIR__ . '/autoloading.php';
require_once __DIR__ . '/vendor/autoload.php';

use controllers\Router;
use controllers\Note;

$request = $_SERVER['REQUEST_URI'];
// var_dump();

Router::route($request);