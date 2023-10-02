<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\UserController;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user/profile/', [UserController::class, 'profile']);
$routes->get('/user/create/', [UserController::class, 'create']);
$routes->post('/user/store/', [UserController::class, 'store']);
$routes->get('/user/', [UserController::class, 'index']);

// $routes->get('/profile/(:any)/(:any)/(:any)', [Home::class, 'profile']);
