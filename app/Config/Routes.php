<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->setAutoRoute(true);
$routes->get('contract', 'Contract::index');
$routes->get('login', 'Login::index');


$routes->post('login', 'Login::authenticate');
$routes->post('/contract', 'Contract::submit');

$routes->get('report', 'Contract::report'); // Updated to use Contract controller for report
$routes->get('contract/download/(:num)/(:any)', 'Contract::download/$1/$2');

#$routes->get('report', 'Report::index');
#$routes->get('report', 'Report::fetch_data');

$routes->get('contract/edit/(:num)', 'Contract::edit/$1');
$routes->post('contract/update/(:num)', 'Contract::update/$1');
$routes->get('contract/delete/(:num)', 'Contract::delete/$1');





