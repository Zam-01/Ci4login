<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Home::index');

// portfolio
$routes->get('/', 'Portfolio::index');
$routes->get('/about', 'Portfolio::about');
$routes->get('/projects', 'Portfolio::project');
$routes->get('/contac', 'Portfolio::contac');
// end portfolio

// routes ke crud 
$routes->get('/Content', 'Cruds::index');
$routes->get('/Cruds/home', 'Cruds::index');
$routes->get('/Cruds/about', 'Cruds::about');
// filter login
if (session()->get('login') !== true) {
  $routes->get('/Cruds/data', 'Cruds::data', ['filter' => 'auth']);
} else {
  if (session()->get('login') == true) {
    $routes->get('/Cruds/data', 'Cruds::data');
  }
}
// edit dan hapus data
$routes->get('/hapus/(:num)', 'Cruds::hapus/$1');
$routes->get('/ubah/(:num)', 'Cruds::edit/$1');
// jika data sudah di ubah lansung alihkan ke data
$routes->get('/content/data', 'Cruds::data');
// ini di gunakan ketika useradmin mencari data
$routes->post('/content/data', 'Cruds::data');
// logout
$routes->get('/logout', 'Crud::logout');






//login user
$routes->get('/login/register2', 'Crud::Userlogin');
$routes->post('/Crud/Daftar', 'Crud::getdata');
$routes->get('/Crud/sigin', 'Crud::sigin');
$routes->post('/Crud/get_sigin', 'Crud::get_sigin');
$routes->post('/Crud/ViewAdmin', 'Crud::ViewAdmin');
$routes->get('/Crud/ViewAdmin', 'Crud::ViewAdmin');
$routes->get('/login/login_admin', 'Crud::sigin');















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
//update data
$routes->post('/Crud/update/(:num)', 'Crud::update/$1');
$routes->post('Crud/data', 'Crud::data');
// multipel tabel / join
//$routes->get('/siswa', 'Home::index');
