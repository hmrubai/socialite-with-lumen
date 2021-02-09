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

$router->post('/register','UsersController@register');

$router->get('/auth/google', ['uses' => 'ExampleController@redirectToProvider']);
$router->get('/success', ['uses' => 'ExampleController@handleProviderCallback']);


$router->get('/auth/github', ['uses' => 'ExampleController@redirectToGithubProvider']);
$router->get('/github/success', ['uses' => 'ExampleController@handleProviderGithubCallback']);
