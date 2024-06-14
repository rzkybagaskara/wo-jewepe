<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//$routes->get('/about', 'Home::about');
$routes->get('/rsvp', 'User::rsvp');
$routes->post('/user/tambahPesanan', 'User::tambahPesanan');
$routes->post('/updatePesanan/(:any)', 'Home::updatePesanan/$1');
$routes->post('/deletePesanan/(:any)', 'Home::deletePesanan/$1');
$routes->get('/daftarPaket', 'Home::daftarPaket');
$routes->get('/tambahPaket', 'Home::tambahPaket');
$routes->post('/deletePaket/(:any)', 'Home::deletePaket/$1');
$routes->post('/updatePaket/(:any)', 'Home::updatePaket/$1');
$routes->post('/tambahPaket', 'Home::tambahPaket');
$routes->get('/daftarPesanan', 'Home::daftarPesanan');

//$routes->get('/loginAdmin', 'Home::loginAdmin');
//$routes->post('login', 'Login::do_login');