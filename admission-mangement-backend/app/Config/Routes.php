<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);
$routes->get('admin/student-admission', 'StudentController::index', ['filter' => 'authGuard']);
// $routes->get('admin/circulars', 'CircularController::index');
$routes->get('admin', 'CircularController::index', ['filter' => 'authGuard']);
$routes->get('admin/circulars/new', 'CircularController::new', ['filter' => 'authGuard']);
$routes->get('applications', 'ApplicationController::index', ['filter' => 'authGuard']);
$routes->get('frontend/studentController ', 'Frontend\StudentController::index', ['filter' => 'authGuard']);
$routes->get('user/signup', 'SignupController::index');
$routes->post('user/store', 'SignupController::store');
$routes->get('user/signin', 'SigninController::index');
$routes->post('user/login', 'SigninController::auth');
$routes->get('user/logout', 'SigninController::logout');
$routes->get('user/frontend/signup', 'Frontend\SignupController::index');
$routes->post('user/frontend/store', 'Frontend\SignupController::store');
$routes->get('user/frontend/signin', 'Frontend\SigninController::index');
$routes->post('user/frontend/login', 'Frontend\SigninController::auth');
$routes->get('user/frontend/logout', 'Frontend\SigninController::logout');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
