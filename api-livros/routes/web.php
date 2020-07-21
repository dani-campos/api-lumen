<?php

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

$router->group(['prefix' => '/api', 'middleware' => 'auth'], function () use ($router) {
    $router->group(['prefix' => 'livros'], function () use ($router) {
        $router->post('', 'LivrosController@store');
        $router->get('', 'LivrosController@index');
        $router->get('{id}', 'LivrosController@show');
        $router->put('{id}', 'LivrosController@update');
        $router->delete('{id}', 'LivrosController@destroy');

        $router->get('{livroId}/paginas', 'PaginasController@buscaPorLivro');
    });

    $router->group(['prefix' => 'paginas'], function () use ($router) {
        $router->post('', 'PaginasController@store');
        $router->get('', 'PaginasController@index');
        $router->get('{id}', 'PaginasController@show');
        $router->put('{id}', 'PaginasController@update');
        $router->delete('{id}', 'PaginasController@destroy');
    });
});

$router->post('/api/login', 'TokenController@gerarToken');
