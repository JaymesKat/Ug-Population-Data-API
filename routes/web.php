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

$router->get('/regions', function () use ($router){
    return 'All Regions data';
});

$router->get('/regions/{region-name}', function () use ($router){
    return 'Single Region data';
});

$router->get('/districts', function () use ($router){
    return 'All districts data';
});

$router->get('/district/{district-name}', function () use ($router){
    return 'Single district data';
});

$router->get('/subcounties', function () use ($router){
    return 'All subcounties data';
});

$router->get('/subcounty/{subcounty-name}', function () use ($router){
    return 'Single subcounty data';
});
