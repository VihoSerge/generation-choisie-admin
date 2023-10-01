<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/podcast', 'Home::podcast');
$routes->get('/item', 'Home::item');
$routes->get('/category', 'Home::category');


//API ROUTES
$routes->get('/covers', 'CoverController::index');
$routes->get('/categories', 'CategoryController::index');
$routes->get('/items', 'ItemController::index');
$routes->get('/podcasts', 'PodcastController::index');
