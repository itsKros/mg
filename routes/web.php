<?php

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


Route::get('/', 'Frontend\SiteController@index')->name('home');
Route::get('/about', 'Frontend\SiteController@about')->name('about');
Route::get('/services', 'Frontend\SiteController@services')->name('services');
Route::get('/contact', 'Frontend\SiteController@contact')->name('contact');
Route::get('/testmail', 'Frontend\SiteController@testmail');
Route::get('/models', 'Frontend\UserController@index')->name('models');
Route::get('/model/{model}', 'Frontend\UserController@show')->name('model.show');
Route::resource('booking', 'Frontend\BookingController');
Route::post('/booked', 'Frontend\SiteController@add_appoinment')->name('booking.submit');



Auth::routes();
Route::get('/my-account', 'Frontend\UserController@myaccount')->name('my-account');
Route::post('/my-account', 'Frontend\UserController@accountdetailchange')->name('accountdetailchange');

Route::get('/my-profile/', 'Frontend\UserController@myprofile')->name('my-profile');
Route::post('/my-profile', 'Frontend\UserController@profiledetailchange')->name('profiledetailchange');

Route::get('/my-gallery/', 'Frontend\UserController@mygallery')->name('my-gallery');
Route::post('/my-gallery', 'Frontend\UserController@galleryfeatured')->name('galleryfeatured');
Route::get('/my-booking/', 'Frontend\UserController@mybooking')->name('my-booking');
Route::resource('gallery', 'Frontend\GalleryController');


//Admin Routes
Route::group(['prefix' => 'admin'], function(){

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'Backend\HomeController@index')->name('admin.home');
    Route::resource('homeinfo', 'Backend\HomeinfoController')->only([
        'edit', 'update'
    ]);
    Route::resource('package', 'Backend\PackageController')->only([
        'edit', 'update'
    ]);
    Route::resource('/users', 'Backend\UserController')->only([
        'index', 'create', 'store', 'destroy'
    ]);

    

});

