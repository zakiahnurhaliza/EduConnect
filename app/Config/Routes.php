<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Mengarahkan root URL ke metode index di Home controller
$routes->get('materi', 'Materi::index'); // Mengarahkan ke Materi controller
$routes->get('kuis', 'Kuis::index'); // Mengarahkan ke Kuis controller
$routes->get('kuis/(:segment)/(:num)', 'Kuis::mulai/$2');
$routes->post('kuis/submit', 'Kuis::submit');
$routes->get('kuis/selesai', 'Kuis::selesai');
$routes->get('buku', 'Buku::index'); // Mengarahkan ke Buku controller
