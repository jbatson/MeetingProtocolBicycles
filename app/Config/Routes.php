<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
//$routes->cli('/', 'Home::index');
$routes->setAutoRoute(false);

$routes->get('/', 'Bicycles::index');
$routes->cli('/', 'Bicycles::index');
$routes->get('bicycles', 'Bicycles::getBicycle');
$routes->cli('bicycles', 'Bicycles::getBicycle');
