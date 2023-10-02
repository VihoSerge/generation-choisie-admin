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

//Items routes
$routes->get('item/create', 'ItemController::create');

//Categories routes
$routes->get('cover/create', 'CoverController::create');
$routes->post('cover/add', 'CoverController::add');
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
