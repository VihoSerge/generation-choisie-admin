<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Home routes
$routes->get('/', 'Home::index');
$routes->get('/podcast', 'Home::podcast');
$routes->get('/item', 'Home::item');
$routes->get('/category', 'Home::category');

//Covers routes
$routes->post('cover/add', 'CoverController::add');
$routes->put('cover/update/(:num)', 'CoverController::update/$1');
$routes->get('cover/delete/(:num)', 'CoverController::delete/$1');
//Items routes
$routes->post('item/add', 'ItemController::add');
$routes->put('item/update/(:num)', 'ItemController::update/$1');
$routes->get('item/delete/(:num)', 'ItemController::delete/$1');
//Categories routes
$routes->post('category/add', 'CategoryController::add');
$routes->put('category/update/(:num)', 'CategoryController::update/$1');
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1');
//Podcasts routes
$routes->post('podcast/add', 'PodcastController::add');
$routes->put('podcast/update/(:num)', 'PodcastController::update/$1');
$routes->get('podcast/delete/(:num)', 'PodcastController::delete/$1');
//Users routes
$routes->get('user/login', 'UserController::index');
$routes->post('user/register', 'UserController::add');
$routes->put('user/update/(:num)', 'UserController::update/$1');
$routes->get('user/delete/(:num)', 'UserController::delete/$1');




//API ROUTES
$routes->get('/covers', 'CoverController::index');
$routes->get('/categories', 'CategoryController::index');
$routes->get('/items', 'ItemController::index');
$routes->get('/podcasts', 'PodcastController::index');
