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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/logout','LogoutController::index');
$routes->get('/', 'Home::index');
$routes->get('/register','RegisterController::index');
$routes->post('/register','RegisterController::store');

$routes->get('/login','LoginController::index');
$routes->post('/login','LoginController::loginAuth');

$routes->get('/profile','ProfileController::index',['filter'=>'authGuard']);

/*$routes->get('/employee/(:num)/edit','Employee::edit/$1',['filter'=>'adminGuard']);
$routes->get('/employee/new','Employee::new',['filter'=>'adminGuard']);
$routes->post('/employee/(:num)', 'Employee::update/$1',['filter'=>'adminGuard']);
$routes->post('/employee','Employee::create',['filter'=>'adminGuard']);*/

$routes->get('/', 'Home::index');

//$routes->get('/teams/(:num)/stats', 'EmployeeController::hitting_stats/$1');

$routes->get('/teams_list', 'Teams::index');
$routes->get('/teams_list/(:alpha)', 'Teams::individual_team/$1');
$routes->get('/teams_list/(:alpha)/stats/batting', 'Teams::individual_team_hitting_stats/$1');
$routes->get('/teams_list/(:alpha)/stats/pitching', 'Teams::individual_team_pitching_stats/$1');
$routes->get('/teams_list/(:alpha)/roster', 'Teams::roster/$1');


$routes->get('/teams/(:num)/edit','Teams::edit/$1',['filter'=>'authGuard']);
$routes->get('/teams/new','Teams::new',['filter'=>'authGuard']);
$routes->get('/teams/(:num)', 'Teams::show/$1',['filter'=>'authGuard']);
$routes->post('/teams/(:num)', 'Teams::update/$1',['filter'=>'authGuard']);
$routes->post('/teams','Teams::create',['filter'=>'authGuard']);



$routes->get('/games/(:num)/edit','Games::edit/$1',['filter'=>'authGuard']);
$routes->get('/games/new','Games::new',['filter'=>'authGuard']);
$routes->get('/games/(:num)', 'Games::show/$1',['filter'=>'authGuard']);
$routes->post('/games/(:num)', 'Games::update/$1',['filter'=>'authGuard']);
$routes->post('/games','Games::create',['filter'=>'authGuard']);

$routes->get('/hitting_stats/(:num)/edit','HittingStats::edit/$1',['filter'=>'authGuard']);
$routes->get('/hitting_stats/new','HittingStats::new',['filter'=>'authGuard']);
$routes->get('/hitting_stats/(:num)', 'HittingStats::show/$1',['filter'=>'authGuard']);
$routes->post('/hitting_stats/(:num)', 'HittingStats::update/$1',['filter'=>'authGuard']);
$routes->post('/hitting_stats/','HittingStats::create',['filter'=>'authGuard']);

$routes->get('/pitching_stats/(:num)/edit','PitchingStats::edit/$1',['filter'=>'authGuard']);
$routes->get('/pitching_stats/new','PitchingStats::new',['filter'=>'authGuard']);
$routes->get('/pitching_stats/(:num)', 'PitchingStats::show/$1',['filter'=>'authGuard']);
$routes->post('/pitching_stats/(:num)', 'PitchingStats::update/$1',['filter'=>'authGuard']);
$routes->post('/pitching_stats/','PitchingStats::create',['filter'=>'authGuard']);

$routes->get('/players/(:num)/edit','Players::edit/$1',['filter'=>'authGuard']);
$routes->get('/players/new','Players::new',['filter'=>'authGuard']);
$routes->get('/players/(:num)', 'Players::show/$1',['filter'=>'authGuard']);
$routes->post('/players/(:num)', 'Players::update/$1',['filter'=>'authGuard']);
$routes->post('/players/','Players::create',['filter'=>'authGuard']);

$routes->get('/users/(:num)/edit','Users::edit/$1',['filter'=>'authGuard']);
$routes->get('/users/new','Users::new',['filter'=>'authGuard']);
$routes->get('/users/(:num)', 'Users::show/$1',['filter'=>'authGuard']);
$routes->post('/users/(:num)', 'Users::update/$1',['filter'=>'authGuard']);
$routes->post('/users/','Users::create',['filter'=>'authGuard']);

$routes->get('/team_pitching_stats/(:num)/edit','TeamPitchingStats::edit/$1',['filter'=>'authGuard']);
$routes->get('/team_pitching_stats/new','TeamPitchingStats::new',['filter'=>'authGuard']);
$routes->get('/team_pitching_stats/(:num)', 'TeamPitchingStats::show/$1',['filter'=>'authGuard']);
$routes->post('/team_pitching_stats/(:num)', 'TeamPitchingStats::update/$1',['filter'=>'authGuard']);
$routes->post('/team_pitching_stats/','TeamPitchingStats::create',['filter'=>'authGuard']);

$routes->get('/team_hitting_stats/(:num)/edit','TeamHittingStats::edit/$1',['filter'=>'authGuard']);
$routes->get('/team_hitting_stats/new','TeamHittingStats::new',['filter'=>'authGuard']);
$routes->get('/team_hitting_stats/(:num)', 'TeamHittingStats::show/$1',['filter'=>'authGuard']);
$routes->post('/team_hitting_stats/(:num)', 'TeamHittingStats::update/$1',['filter'=>'authGuard']);
$routes->post('/team_hitting_stats/','TeamHittingStats::create',['filter'=>'authGuard']);



$routes->get('/stats', 'Stats::index');

$routes->get('/league_leaders/([a-zA-Z_]+)', 'Stats::leaders/$1');
$routes->get('/league_leaders', 'Stats::league_leaders');

$routes->get('/team_stats/([a-zA-Z_]+)', 'Stats::team_leaders/$1');
$routes->get('/team_stats', 'Stats::team_stats');

$routes->get('/scores', 'Scores::index');
$routes->get('/scores/(:alpha)', 'Scores::scores_of_team/$1');

$routes->get('/login','LoginController::index');
$routes->post('/login','LoginController::loginAuth');

$routes->get('/profile','ProfileController::index',['filter'=>'authGuard']);

$routes->get('/register','RegisterController::index');
$routes->post('/register','RegisterController::store');

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
