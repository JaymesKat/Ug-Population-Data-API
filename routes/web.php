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

use App\Http\Controllers\RegionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\SubcountyController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/regions', 'RegionController@all');

$router->get('/regions/{regionName}', 'RegionController@get');

$router->get('/regions/{regionName}/districts', 'RegionController@getDistricts');

$router->get('/districts', 'DistrictController@all');

$router->get('/districts/{districtName}', 'DistrictController@get');

$router->get('/districts/{districtName}/subcounties', 'DistrictController@getSubcounties');

$router->get('/subcounties', 'SubcountyController@all');

$router->get('/subcounties/{subcountyName}', 'SubcountyController@get');
