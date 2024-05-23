<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Home::index');
$routes->get('/', 'Home::indexuser');
$routes->get('/pemesan', 'Pemesanan::indexpesan');



// $routes->get('/pemesanan_user', 'Pemesanan::indexuser');
$routes->post('/pemesanan/simpandata', 'Pemesanan::simpandata_user');

$routes->post('/ceklogin', 'Home::ceklogin');
$routes->get('/menu', 'Home::menu');
$routes->get('/logout', 'Home::logout');

$routes->get('/produk', 'Produk::index');
$routes->post('/produk/deletedata', 'Produk::deletedata');
$routes->post('/produk/simpandata', 'Produk::simpandata');
$routes->post('/produk/updatedata', 'Produk::updatedata');


$routes->get('/laporan', 'Laporan::index');
$routes->post('/laporan/simpandata', 'Laporan::simpandata');
$routes->post('/laporan/updatedata', 'Laporan::updatedata');
$routes->post('/laporan/deletedata', 'Laporan::deletedata');

$routes->get('/pemesanan', 'Pemesanan::index');
$routes->post('/pemesanan/updatedata', 'Pemesanan::updatedata');
$routes->post('/pemesanan/deletedata', 'Pemesanan::deletedata');
