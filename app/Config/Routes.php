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
$routes->get('cover/create', 'CoverController::create');
$routes->post('cover/add', 'CoverController::add');
$routes->get('cover/edit/(:num)', 'CoverController::edit/$1');
$routes->put('cover/update/(:num)', 'CoverController::update/$1');
$routes->get('cover/delete/(:num)', 'CoverController::delete/$1');
//Items routes
$routes->get('item/create', 'ItemController::create');
$routes->post('item/add', 'ItemController::add');
$routes->get('item/edit/(:num)', 'ItemController::edit/$1');
$routes->put('item/update/(:num)', 'ItemController::update/$1');
$routes->get('item/delete/(:num)', 'ItemController::delete/$1');
//Categories routes
$routes->get('category/create', 'CategoryController::create');
$routes->post('category/add', 'CategoryController::add');
$routes->get('category/edit/(:num)', 'CategoryController::edit/$1');
$routes->put('category/update/(:num)', 'CategoryController::update/$1');
$routes->get('category/delete/(:num)', 'CategoryController::delete/$1');
//Podcasts routes
$routes->get('podcast/create', 'PodcastController::create');
$routes->post('podcast/add', 'PodcastController::add');
$routes->get('podcast/edit/(:num)', 'PodcastController::edit/$1');
$routes->put('podcast/update/(:num)', 'PodcastController::update/$1');
$routes->get('podcast/delete/(:num)', 'PodcastController::delete/$1');



//API ROUTES
$routes->get('/covers', 'CoverController::index');
$routes->get('/categories', 'CategoryController::index');
$routes->get('/items', 'ItemController::index');
$routes->get('/podcasts', 'PodcastController::index');
