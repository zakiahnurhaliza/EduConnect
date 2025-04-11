<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Mengarahkan root URL ke metode index di Home controller
$routes->get('materi', 'Materi::index'); // Mengarahkan ke Materi controller
$routes->get('kuis', 'Kuis::index'); // Mengarahkan ke Kuis controller
$routes->get('about', 'About::index'); // Mengarahkan ke About controller
$routes->get('contact', 'Contact::index'); // Mengarahkan ke Contact controller