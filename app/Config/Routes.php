<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'StudentController::index');
$routes->get('students/login', 'StudentController::login');
$routes->post('students/index', 'StudentController::index');


