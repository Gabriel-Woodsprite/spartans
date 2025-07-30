<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Routes\Web;

$webRoutes = new Web();
$webRoutes->handle($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
