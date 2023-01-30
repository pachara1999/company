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
$routes->setDefaultNamespace('\Modules\Auth\Controllers');
$routes->setDefaultController('Auth');
$routes->setDefaultMethod('signin');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Authen Routes
$routes->get('/', 'Auth::signin');
$routes->post('/loginAuth', 'Auth::loginAuth');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');
$routes->post('/check_academy', 'Auth::check_academy');
$routes->get('/addowner/(:num)', 'Auth::addowner/$1');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// Dashborad
$routes->group('dashboard', ['namespace' => '\Modules\Dashboard\Controllers', 'filter' => 'authGuard'], function ($routes) {
	$routes->get('/', 'Dashboard::index');
});
// Academy Routes
$routes->group('academy', ['namespace' => '\Modules\Academy\Controllers'], function ($routes) {
	$routes->get('/', 'Academy::index', ['filter' => 'authGuard']);
	$routes->get('addByAdmin', 'Academy::addByAdmin', ['filter' => 'authGuard']);
	$routes->get('manage/(:num)', 'Academy::manage/$1', ['filter' => 'authGuard']);
	$routes->post('save', 'Academy::save', ['filter' => 'authGuard']);
	$routes->post('stopService', 'Academy::stopService', ['filter' => 'authGuard']);
	// Register
	$routes->post('add', 'Academy::add');
});

// Member Routes
$routes->group('member', ['namespace' => '\Modules\Member\Controllers'], function ($routes) {
	$routes->get('/', 'Member::index', ['filter' => 'authGuard']);
	$routes->get('add', 'Member::add', ['filter' => 'authGuard']);
	$routes->get('manage/(:num)', 'Member::manage/$1', ['filter' => 'authGuard']);
	$routes->post('save', 'Member::save', ['filter' => 'authGuard']);
	$routes->post('delete', 'Member::delete', ['filter' => 'authGuard']);

	// Register
	$routes->post('regisOwner', 'Member::regisOwner');
});

// Plyer Routes
$routes->group('player', ['namespace' => '\Modules\Player\Controllers', 'filter' => 'authGuard'], function ($routes) {
	$routes->get('/', 'Player::index');
	$routes->get('add', 'Player::add');
	$routes->post('save', 'Player::save');
	$routes->get('manage/(:num)', 'Player::manage/$1');
	$routes->post('delete', 'Player::delete');
});

// Cost Routes
$routes->group('cost', ['namespace' => '\Modules\Cost\Controllers', 'filter' => 'authGuard'], function ($routes) {
	$routes->get('/', 'Cost::index');
	$routes->get('add', 'Cost::add');
	$routes->post('save', 'Cost::save');
	$routes->get('manage/(:num)', 'Cost::manage/$1');
	$routes->post('delete', 'Cost::delete');
	$routes->get('view-payment', 'Cost::view_payment');
	$routes->post('ChangeStatus_Playerpayment', 'Cost::ChangeStatus_Playerpayment');
});

// Role Routes
$routes->group('role', ['namespace' => '\Modules\Role\Controllers', 'filter' => 'authGuard'], function ($routes) {
	$routes->get('/', 'Role::index');
	$routes->get('manage', 'Role::addrole');
	$routes->get('manage/(:num)', 'Role::manage/$1');
	$routes->post('save', 'Role::save');
	$routes->post('delete', 'Role::delete');
});

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

