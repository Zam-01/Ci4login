<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');
$routes->get('/', 'Crud::home');
$routes->get('/Crud', 'Crud::home');
$routes->get('/Crud/home', 'Crud::home');
$routes->get('/Crud/about', 'Crud::about');
$routes->get('/Crud/contac', 'Crud::contac');
//penambahan pencarian
//$routes->post('/Crud/data', 'Crud::data');
//proses crud ada di routes ini
$routes->get('/Crud/register', 'Crud::login');
//insert data
$routes->post('/Crud/save', 'Crud::save');
//hapus data
$routes->get('/hapus(:num)', 'Crud::hapus/$1');
//edit data
$routes->get('/ubah(:num)', 'Crud::edit/$1');
//update data
$routes->post('/Crud/update/(:num)', 'Crud::update/$1');
$routes->post('Crud/data', 'Crud::data');
// multipel tabel / join
//$routes->get('/siswa', 'Home::index');

if (session()->get('login') !== true) {
  $routes->get('/Crud/data', 'Crud::data', ['filter' => 'auth']);
} else {
  if (session()->get('login') == true) {
    $routes->get('/Crud/data', 'Crud::data');
  }
}
// testing join model
//$routes->get('/test', 'Crud::test');
// if (session()->get('login') === false) {

// } else {
//   $routes->get('/Crud/data', 'Crud::data');

// }


//login user
$routes->get('/login/register2', 'Crud::Userlogin');
$routes->post('/Crud/Daftar', 'Crud::getdata');
$routes->get('/Crud/sigin', 'Crud::sigin');
$routes->post('/Crud/get_sigin', 'Crud::get_sigin');
$routes->get('/logout', 'Crud::logout');
$routes->get('/Crud/ViewAdmin', 'Crud::ViewAdmin');
$routes->get('/login/login_admin', 'Crud::sigin');
