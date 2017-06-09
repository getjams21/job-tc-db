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

// Sessions
Route::get('/login', 'AuthController@index');
Route::post('/login', [
    'uses' => 'AuthController@authenticate',
    'as' => 'login'
]);
Route::get('/logout', function (){
    Auth::logout();
    return redirect()->route('login');
});

// Middleware to Dashboard
Route::group(['middleware' => ['auth']], function () {
    // Dashboard
    Route::get('/dashboard', function (){
        return view('dashboard.home');
    });

    // Users
    Route::resource('/users', 'UserController');

    // Company
    Route::resource('/companies', 'CompanyController');
});
// Route::get('/company/new', 'CompanyController@newCompany');
// Route::post('/company/create', 'CompanyController@create')->name('createCompany');
