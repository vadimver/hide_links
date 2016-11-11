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

$app->get('/', 'LinkController@home');
$app->post('/new', 'LinkController@newLink');
$app->get('/link', 'LinkController@link');
$app->get('/redirect', 'RedirectController@redirect');
$app->get('/notfound', function () {
    return view('notfound');
});
