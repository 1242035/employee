<?php
// Homepage
get('/', function () {
    return view('home');
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
get('auth/adduser', 'Admin\UserController@getAdduser');
post('auth/adduser', 'Admin\UserController@postAdduser');

//Change Password
get('change-password', 'Admin\UserController@getchangePassword');
post('change-password', 'Admin\UserController@postchangePassword');

//Department Management
Route::resource('departments', 'DepartmentController');