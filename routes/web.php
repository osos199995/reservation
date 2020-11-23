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

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

    Route::group(['middleware' => ['admin','local']], function () {
   //index
        Route::get('/', 'Users\Admin\AdminController@index')->name('admin.dashboard');
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
    Route::get('resturants-categories-edit/{id}','ResturantsCategories@edit')->name('resturants-categories-edit');
    Route::patch('resturants-categories-update/{id}','ResturantsCategories@update')->name('resturants-categories-update');



    // resturant options
    Route::get('resturants-options','ResturantOptions@index')->name('resturants-options');
    Route::get('create-options-categories','ResturantOptions@create')->name('create-resturants-options');
    Route::post('resturants-options-store','ResturantOptions@store')->name('resturants-options-store');
    Route::post('resturants-options-status/{id}','ResturantOptions@changeStatus')->name('resturants-options-status');
    Route::get('resturants-options-edit/{id}','ResturantOptions@edit')->name('resturants-options-edit');
    Route::patch('resturants-options-update/{id}','ResturantOptions@update')->name('resturants-options-update');

    // resturant types
    Route::get('resturants-types','ResturantTypes@index')->name('resturants-types');
    Route::get('create-types-categories','ResturantTypes@create')->name('create-resturants-types');
    Route::post('resturants-types-store','ResturantTypes@store')->name('resturants-types-store');
    Route::post('resturants-types-status/{id}','ResturantTypes@changeStatus')->name('resturants-types-status');
    Route::get('resturants-types-edit/{id}','ResturantTypes@edit')->name('resturants-types-edit');
    Route::patch('resturants-types-update/{id}','ResturantTypes@update')->name('resturants-types-update');

    // cities routes

        Route::get('cities','CityController@index')->name('cities');
        Route::get('create-cities','CityController@create')->name('create-cities');
        Route::post('cities-store','CityController@store')->name('cities-store');
        Route::get('cities-show/{id}','CityController@show')->name('cities-show');
        Route::get('cities-edit/{id}','CityController@edit')->name('cities-edit');
        Route::patch('cities-update/{id}','CityController@update')->name('cities-update');
        Route::post('cities-status/{id}','CityController@changeStatus')->name('cities-status');

//areas routes
        Route::get('areas','AreaController@index')->name('areas');
        Route::get('areas-cities','AreaController@create')->name('areas-cities');
        Route::post('areas-store','AreaController@store')->name('areas-store');
        Route::get('areas-show/{id}','AreaController@show')->name('areas-show');
        Route::get('areas-edit/{id}','AreaController@edit')->name('areas-edit');
        Route::patch('areas-update/{id}','AreaController@update')->name('areas-update');
        Route::post('areas-status/{id}','AreaController@changeStatus')->name('areas-status');

    });



// Vendor routes






});
Route::prefix('vendor')->group(function(){
    Route::group(['middleware' => ['local']], function () {
    Route::get('/', 'Users\Vendor\VendorController@index')->name('vendor.dashboard');
    Route::get('/login', 'Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login', 'Auth\VendorLoginController@login')->name('vendor.login.submit');
    Route::get('/register', 'Auth\VendorRegisterController@showRegisterForm')->name('vendor.register');
    Route::post('/register', 'Auth\VendorRegisterController@register')->name('vendor.register.submit');



        // branches routes
        Route::get('branches','BranchesController@index')->name('branches');
        Route::get('create-branches','BranchesController@create')->name('create-branches');
        Route::post('branches-store','BranchesController@store')->name('branches-store');
        Route::get('branches-show/{id}','BranchesController@show')->name('branches-show');
        Route::get('branches-edit/{id}','BranchesController@edit')->name('branches-edit');
        Route::patch('branches-update/{id}','BranchesController@update')->name('branches-update');



});
});

Route::get('setlang/{locale}', 'Localization@set_lang')->name('setlang');
