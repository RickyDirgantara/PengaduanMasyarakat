<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

# User akses
$routes->setDefaultController('index');
$routes->get('/', 'Index::index');
$routes->get('/panduan', 'Panduan::index');
$routes->setDefaultMethod('index');
$routes->post('/register', 'AuthController::register');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/laporan', 'Laporan::index');
$routes->get('/complaintsUser', 'complaintsUser::index');
$routes->post('/create', 'Laporan::create');

# akses operator dan admin
$routes->get('dashboard', 'Dashboard::index');

# hanya admin yang bisa mengedit user
$routes->get('editUser/(:num)', 'Dashboard::editUser/$1');
$routes->post('updateUser', 'Dashboard::updateUser');
$routes->get('deleteUser/(:num)', 'Dashboard::deleteUser/$1');

# akses admin dan operator
$routes->get('/complaints', 'ComplaintController::index');
$routes->get('create', 'ComplaintController::create');
$routes->post('store', 'ComplaintController::store');
$routes->get('edit/(:num)', 'ComplaintController::edit/$1');
$routes->post('update/(:num)', 'ComplaintController::update/$1');
$routes->get('delete/(:num)', 'ComplaintController::delete/$1');
$routes->get('createFollowUps/(:num)', 'FollowUpController::create/$1');
$routes->post('/storeFollowUps', 'FollowUpController::store');
$routes->get('/followUps', 'FollowUpController::index');

# login admin dan operator
$routes->get('/loginAdmin', 'AuthAdmin::index');
$routes->post('/loginAdmin', 'AuthAdmin::login');
$routes->get('/logoutAdmin', 'AuthAdmin::logout');