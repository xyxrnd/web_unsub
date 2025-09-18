<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');       // Beranda
$routes->get('/agenda', 'Home::agenda'); // Agenda
