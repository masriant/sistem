<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Admin::index');
$routes->get('/lakip', 'Lakip::index');
$routes->get('/project', 'Project::index');
$routes->get('/project/create', 'Project::create');
$routes->get('/project/add', 'Project::add');
$routes->get('/project/data', 'Project::data');
$routes->get('/komik/search', 'Komik::search');
$routes->get('/project/edit/(:segment)', 'Project::edit/$1');
$routes->get('/project/editing/(:segment)', 'Project::editing/$1');
$routes->get('/project/kwitansi/(:segment)', 'Project::kwitansi/$1');
$routes->get('/project/sertifikat/(:segment)', 'Project::sertifikat/$1');
$routes->get('/project/print/(:segment)', 'Project::print/$1');
$routes->delete('/project/(:num)', 'Project::delete/$1');
$routes->get('/project/(:any)', 'Project::detail/$1');

/**
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