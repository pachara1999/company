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
$routes->setDefaultNamespace('\Modules\Home\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Authen Routes
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/team', 'Home::team');
$routes->get('/portfolio', 'Home::portfolio');
$routes->get('/new', 'Home::news');
$routes->get('/contact', 'Home::contact');
$routes->get('/profireteam/(:any)', 'Home::profireteam/$1');
$routes->get('/newsdetel/(:any)', 'Home::newsdetel/$1');
$routes->get('/pulsecheck', 'Home::pulsecheck');


// Auth Routes
$routes->group('auth', ['namespace' => '\Modules\Auth\Controllers'], function ($routes) {
    // $routes->get('add', 'Auth::add');
    $routes->get('login', 'Auth::signin');
    $routes->post('loginAuth', 'Auth::loginAuth');
    $routes->get('logout', 'Auth::logout');
});
// Admin
$routes->group('admin', ['namespace' => '\Modules\Admin\Controllers', 'filter' => 'authGuard'], function ($routes) {
    $routes->get('/', 'Admin::index');

    $routes->get('menu-bar', 'Admin::menu_bar');
    $routes->post('saveMenubar', 'Admin::saveMenubar');
    $routes->post('saveLogo', 'Admin::saveLogo');

    $routes->get('manage-footer', 'Admin::manage_footer');
    $routes->post('saveFooter', 'Admin::saveFooter');

    $routes->post('saveContent', 'Admin::saveContent');
    // employee
    $routes->get('employee', 'Employee::index');
    $routes->get('employee/manage', 'Employee::manage');
    $routes->get('employee/manage/(:any)', 'Employee::manage/$1');
    $routes->post('employee/save', 'Employee::save');
    $routes->post('employee/delete', 'Employee::deleteEmployee');
    // portfolio
    $routes->get('portfolio', 'Portfolio::index');
    $routes->get('portfolio/manage', 'Portfolio::manage');
    $routes->get('portfolio/manage/(:any)', 'Portfolio::manage/$1');
    $routes->post('portfolio/save', 'Portfolio::save');
    $routes->post('portfolio/delete', 'Portfolio::deletePortfolio');
    // News
    $routes->get('news', 'News::index');
    $routes->get('news/manage', 'News::manage');
    $routes->get('news/manage/(:any)', 'News::manage/$1');
    $routes->post('news/save', 'News::save');
    $routes->post('news/deleteNews', 'News::delete_new');

    // News Category
    $routes->get('news/manage-category', 'News::category_index');
    $routes->post('news/add-category', 'News::category_add');
    $routes->post('news/delete-category', 'News::category_delete');
});

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


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
