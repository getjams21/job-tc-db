<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Users
Route::get('/users/new', 'UsersController@newUser');
Route::post('/users/create', 'UsersController@create')->name('createUser');

// Company
Route::get('/company/new', 'CompanyController@newCompany');
Route::post('/company/create', 'CompanyController@create')->name('createCompany');
