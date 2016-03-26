<?php
// Blog pages
get('/', function () {
    return redirect('/blog');
});
get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');
// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group([
    'namespace' => 'Administrator',
    'middleware' => 'auth',
], function () {
    resource('admin/post', 'PostController');
});
// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');