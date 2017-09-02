<?php

use Illuminate\Http\Request;
use Dingo\Api\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// v1
$api->version('v1', [
    'namespace' => 'Someline\Api\Controllers',
    'middleware' => ['api']
], function (Router $api) {

    $api->group(['middleware' => ['auth:api']], function (Router $api) {
    // $api->group(['middleware' => ['']], function (Router $api) {

        // Rate: 100 requests per 5 minutes
        $api->group(['middleware' => ['api.throttle'], 'limit' => 100, 'expires' => 5], function (Router $api) {

            $api->group(['prefix' => 'datatable'], function (Router $api) {
                $api->post('/', 'UsersController@datatable');
            });
            // /users
            $api->group(['prefix' => 'users'], function (Router $api) {
                $api->get('/', 'UsersController@index');
                $api->post('/', 'UsersController@store');
                $api->get('/me', 'UsersController@me');
                $api->get('/{id}', 'UsersController@show');
                $api->put('/{id}', 'UsersController@update');
                $api->delete('/{id}', 'UsersController@destroy');
            });

            // textnow
            $api->group(['prefix' => 'textnow'], function (Router $api) {
                $api->get('/', 'TextnowsController@index');
                $api->post('/', 'TextnowsController@store');
                $api->get('/{id}', 'TextnowsController@show');
                $api->put('/{id}', 'TextnowsController@update');
                $api->delete('/{id}', 'TextnowsController@destroy');
            });

        });

    });

});
