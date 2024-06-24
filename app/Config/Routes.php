<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/promos', 'PromotionsController::index');
$routes->get('/promos/add', 'PromotionsController::add');
$routes->post('/promos/submit', 'PromotionsController::submit');
$routes->post('/promos/delete/(:num)', 'PromotionsController::delete/$1');