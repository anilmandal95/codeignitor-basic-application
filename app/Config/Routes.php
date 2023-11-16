<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/register', 'Home::register');

$routes->post('/register', 'Home::register');

$routes->get('/user_dashboard', 'dashboardController::user_dashboard');

//$routes->match(["get", "post"], 'register/', 'Home::register');

$routes->get('login/', 'Home::login');

// How to pass parameter in routes
$routes->get('/product/(:num)', 'Home::countProduct/$1');
$routes->get('/multiply/(:num)/(:num)', 'Home::multiply/$1/$2');

//************************************************************* */