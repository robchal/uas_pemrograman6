<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');
$routes->post('/search', 'Home::search');
// $routes->post('/user/add', 'User::add');
// $routes->post('/level', 'Level::index');
// $routes->post('/level/add', 'Level::add');
// $routes->get('/barang/nambah', 'Barang::tambah');
// $routes->post('/barang/add', 'Barang::add');
// $routes->get('/login', 'Login::index');
// $routes->post('/login', 'Login::auth');
// $routes->post('/login', 'Login::logout');
// $routes->post('/register', 'Register::index');
// $routes->post('/register', 'Register::save');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}


// SELECT students.studentId, students.name, borrows.takenDate, borrows.broughtDate, books.name, books.pageCount, authors.name, types.name FROM ((((students INNER JOIN borrows ON students.studentId=borrows.studentId) INNER JOIN books ON books.bookId=borrows.borrowId) INNER JOIN authors ON authors.authorId=books.authorId) INNER JOIN types ON types.typeId=books.bookId);