<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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

$routes->get('/Admin', 'Admin::index');
$routes->get('/Admin/Dashboard', 'Dashboard::index');

$routes->get('/Dashboard/logout', 'Dashboard::logout');


$routes->get('/About/display', 'About::display');
$routes->get('/About/edit/(:any)', 'About::edit/$1');

$routes->get('/Certification/display', 'Certification::display');
$routes->get('/Certification/add', 'Certification::add');
$routes->get('/Certification/edit/(:any)', 'Certification::edit/$1');
$routes->get('/Certification/delete/(:any)', 'Certification::delete/$1');

$routes->get('/Competence/display', 'Competence::display');
$routes->get('/Competence/add', 'Competence::add');
$routes->get('/Competence/edit/(:any)', 'Competence::edit/$1');
$routes->get('/Competence/delete/(:any)', 'Competence::delete/$1');

$routes->get('/Formation/display', 'Formation::display');
$routes->get('/Formation/add', 'Formation::add');
$routes->get('/Formation/edit/(:any)', 'Formation::edit/$1');
$routes->get('/Formation/delete/(:any)', 'Formation::delete/$1');

$routes->get('/Interet/display', 'Interet::display');
$routes->get('/Interet/add', 'Interet::add');
$routes->get('/Interet/edit/(:any)', 'Interet::edit/$1');
$routes->get('/Interet/delete/(:any)', 'Interet::delete/$1');

$routes->get('/Projet/display', 'Projet::display');
$routes->get('/Projet/add', 'Projet::add');
$routes->get('/Projet/edit/(:any)', 'Projet::edit/$1');
$routes->get('/Projet/delete/(:any)', 'Projet::delete/$1');

$routes->get('Contact/save', 'Contact::save');







/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
