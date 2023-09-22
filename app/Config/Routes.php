<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('products-list', 'ProductCrud::index');
$routes->get('products-form', 'ProductCrud::create');
$routes->post('submit-form', 'ProductCrud::store');
$routes->get('edit-view/(:num)', 'ProductCrud::singleUser/$1');
$routes->post('update', 'ProductCrud::update');
$routes->get('delete/(:num)', 'ProductCrud::delete/$1');