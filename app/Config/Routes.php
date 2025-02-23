<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login',['as'=>'login']);
$routes->get('/register','AuthController::register',['as'=>'register']);
$routes->get('/dashboard','DashboardController::index',['as'=>'dashboard']);
$routes->get('/products/new','ProductsController::new',['as'=>'new_product']);
$routes->get('/products/edit/(:num)','ProductsController::edit/$1');
$routes->get('/products/show/(:num)','ProductsController::show/$1');
$routes->get('/profile','UsersController::index',['as'=>'profile']);

// POST Request
$routes->post("/register",'UsersController::store',['as'=>'register']);
$routes->post("/login","AuthController::sign_in",['as'=>'login']);
$routes->post('/products',"ProductsController::store",['as'=>'products']);
$routes->post('/products/update/(:num)','ProductsController::update/$1');
$routes->post('/products/delete/(:num)','ProductsController::destroy/$1');