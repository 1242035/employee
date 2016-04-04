<?php
// Blog pages
get('/', function () {
    return view('welcome');
});

 //Admin area
get('admin', function () {
    return redirect('/auth/login');
});
$router->group([
    'namespace' => 'Admin',
    'middleware' => 'auth',
], function () {

});
// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

// Add new admin routes...
Route::get('auth/adduser', 'Admin\UserController@getAdduser');
Route::post('auth/adduser', 'Admin\UserController@postAdduser');

//Change Password
Route::get('change-password', 'Admin\UserController@getchangePassword');
Route::post('change-password', 'Admin\UserController@postchangePassword');