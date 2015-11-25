<?php 

require_once('vendor/autoload.php');
require_once('app/config/globals.php');
require_once(ROUTES_FILE);

$router = new Framework\Router($_SERVER, $__ROUTES);
include($router->Run());
