<?php
require_once __DIR__ . '/../app/core/Router.php';

use App\Core\Router;
    
$router = new Router();

// Register routes
$router->add(method: 'GET', uri: '/students', controller: 'StudentController', function: 'index');
$router->add(method: 'GET', uri: '/students/create', controller: 'StudentController', function: 'create');
$router->add(method: 'GET', uri: '/students/{id}', controller: 'StudentController', function: 'show');

echo "Router is running...";

$router->run();

?>