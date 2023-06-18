<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::group([

    'prefix' => 'api'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('user-profile', 'AuthController@me');

});

//User1Controller
$router->get('/users1','User1Controller@index');

$router->post('/users1', 'User1Controller@add');

$router->get('/users1/{id}', 'User1Controller@show');

$router->put('/users1/{id}','User1Controller@up');

$router->delete('/users1/{id}', 'User1Controller@del');



//User2Controller
$router->get('/users2','User2Controller@index');

$router->post('/users2', 'User2Controller@add');

$router->get('/users2/{id}', 'User2Controller@show');

$router->put('/users2/{id}','User2Controller@up');

$router->delete('/users2/{id}', 'User2Controller@del');

//User3Controller
$router->get('/users3','User3Controller@index');

$router->post('/users3', 'User3Controller@add');

$router->get('/users3/{id}', 'User3Controller@show');

$router->put('/users3/{id}','User3Controller@up');

$router->delete('/users3/{id}', 'User3Controller@del');


