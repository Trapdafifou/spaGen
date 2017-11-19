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
    return 'hello blyat';
});

//get all user defined views
$router->get('shop', 'ShopController@getShopData');

//create user view
$router->get('pages', 'PagesController@getPagesData');

//get user view by ID
$router->get('user_view/{id}', 'UserViewsController@getUserViewById');

//update user view
$router->post('saveUserView', 'UserViewsController@saveUserView');

//delete user view
$router->delete('delete_view/{id}', 'UserViewsController@deleteUserView');
