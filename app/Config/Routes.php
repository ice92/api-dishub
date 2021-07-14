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
$routes->group('api', ['namespace' => 'App\Controllers\Api'], function($routes)
{
	$routes->resource('cidomo',['controller' => 'Cidomo']);
	$routes->resource('jumlahkendaraan',['controller' => 'JumlahKendaraan']);
	$routes->resource('kapal',['controller' => 'Kapal']);
	$routes->resource('keberangkatan',['controller' => 'Keberangkatan']);
	$routes->resource('kendaraan',['controller' => 'Kendaraan']);
	$routes->resource('opgab',['controller' => 'Opgab']);
	$routes->resource('parkir',['controller' => 'Parkir']);
	$routes->resource('pelabuhan',['controller' => 'Pelabuhan']);
	$routes->resource('pengujian',['controller' => 'Pengujian']);
	$routes->resource('retribusi',['controller' => 'Retribusi']);
	$routes->resource('retribusiparkir',['controller' => 'RetribusiParkir']);
	$routes->resource('terminal',['controller' => 'Terminal']);
	$routes->resource('trayek',['controller' => 'Trayek']);
	$routes->resource('jointrayek',['controller' => 'JoinTrayek']);
	$routes->resource('joinkeberangkatan',['controller' => 'JoinKeberangkatan']);
	$routes->resource('joinretribusi',['controller' => 'RetribusiJoin']);
	$routes->resource('pad',['controller' => 'Pad']);
	$routes->resource('padl',['controller' => 'Padl']);
	$routes->resource('statistikcidomo',['controller' => 'StatistikCidomo']);
});
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
