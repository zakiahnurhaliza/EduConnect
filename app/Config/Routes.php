<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index'); // Mengarahkan root URL ke metode index di Home controller
$routes->get('about', 'About::index'); // Mengarahkan ke About controller
$routes->get('services', 'Services::index'); // Mengarahkan ke Services controller
$routes->get('blog', 'Blog::index'); // Mengarahkan ke Blog controller
$routes->get('contact', 'Contact::index'); // Mengarahkan ke Contact controller