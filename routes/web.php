<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Admin routes
Route::prefix('admin')->group(function(){
    Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');


// vendors routes
    Route::get('resturants','ResturantsController@index')->name('resturants');
    Route::get('create-resturants','ResturantsController@create')->name('create-resturants');
    Route::post('resturants-store','ResturantsController@store')->name('resturants-store');
    Route::get('resturants-show/{id}','ResturantsController@show')->name('resturants-show');
    Route::get('resturants-edit/{id}','ResturantsController@edit')->name('resturants-edit');
    Route::patch('resturants-update/{id}','ResturantsController@update')->name('resturants-update');

// resturant categories
    Route::get('resturants-categories','ResturantsCategories@index')->name('resturants-categories');
    Route::get('create-resturants-categories','ResturantsCategories@create')->name('create-resturants-categories');
    Route::post('resturants-categories-store','ResturantsCategories@store')->name('resturants-categories-store');
    Route::post('resturants-categories-status/{id}','ResturantsCategories@changeStatus')->name('resturants-categories-status');



    // resturant options
    Route::get('resturants-options','ResturantOptions@index')->name('resturants-options');
    Route::get('create-options-categories','ResturantOptions@create')->name('create-resturants-options');
    Route::post('resturants-options-store','ResturantOptions@store')->name('resturants-options-store');
    Route::post('resturants-options-status/{id}','ResturantOptions@changeStatus')->name('resturants-options-status');


    // resturant types
    Route::get('resturants-types','ResturantTypes@index')->name('resturants-types');
    Route::get('create-types-categories','ResturantTypes@create')->name('create-resturants-types');
    Route::post('resturants-types-store','ResturantTypes@store')->name('resturants-types-store');
    Route::post('resturants-types-status/{id}','ResturantTypes@changeStatus')->name('resturants-types-status');


});



// Vendor routes
Route::prefix('vendor')->group(function(){
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');
});



