<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'StudentController::index');
$routes->post('students/login', 'StudentController::login');
$routes->get('sample/page_1', 'StudentController::page_1');


