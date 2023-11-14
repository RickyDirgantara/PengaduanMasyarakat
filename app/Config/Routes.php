<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultController('index');
$routes->get('/', 'Index::index');
$routes->get('/panduan', 'Panduan::index');
$routes->setDefaultMethod('index');
$routes->get('dashboard', 'Dashboard::index');
$routes->post('/register', 'AuthController::register');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/laporan', 'Laporan::index');
$routes->post('/create', 'Laporan::create');



