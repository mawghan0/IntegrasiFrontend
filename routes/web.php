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



$router->group(['prefix' => 'mahasiswa'], function () use ($router) { //Muhammad Yusuf Habibie

    $router->get('/', ['uses' => 'MahasiswaController@index']); 
    $router->get('/profile', ['middleware' => 'auth', 'uses' => 'UserController@profile']);
    $router->get('/profile', ['middleware' => 'jwt.auth', 'uses' => 'UserController@profile']);
    $router->delete('/{nim}', ['uses' => 'MahasiswaController@destroy']);
});

$router->group(['prefix' => 'auth'], function () use ($router) { //Muhammad Yusuf Habibie
    $router->post('/register', ['uses' => 'AuthController@register']);
    $router->post('/login', ['uses' => 'AuthController@login']);
});
