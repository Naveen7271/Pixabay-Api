<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('login','Login::index');
$routes->get('register','Register::index');
$routes->get('dashboard', 'Dashboard::index');
$routes->get('login/logout', 'Login::logout');

$routes->get('profile', 'Profile::index');


$routes->get('profile/edit', 'Profile::edit');
$routes->post('profile/update', 'Profile::update');

$routes->get('search', 'Search::index');

$routes->post('login','Login::do_login');
$routes->post('register', 'Register::do_register');

