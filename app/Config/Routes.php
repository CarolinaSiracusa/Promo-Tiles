<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/promos', 'PromotionsController::index');
$routes->get('/promos/add', 'PromotionsController::add');
$routes->post('/promos/submit', 'PromotionsController::submit');
$routes->get('/promos/(:segment)/edit', 'PromotionsController::edit/$1');
$routes->put('/promos/(:segment)', 'PromotionsController::update/$1');
$routes->delete('/promos/(:segment)', 'PromotionsController::delete/$1');