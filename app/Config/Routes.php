<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//$routes->get('/', 'Home::index');


//API ROUTES
$routes->get('/covers', 'CoverController::index');
$routes->get('/categories', 'CategoryController::index');
$routes->get('/items', 'ItemController::index');
$routes->get('/podcasts', 'PodcastController::index');
