<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/about', 'Users::about');
$routes->get('/menu', 'Users::menu');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
