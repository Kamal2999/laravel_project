<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
})->name('service-page');

Route::get('/register', function () {
    return view('register');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/home' , 'user')->name('home-page');    
    Route::get('/about' , 'about')->name('about-page');
    // Route::get('/data' , 'fetch')->name('data');
    Route::get('/fetch_data{id}' ,'fetch_data')->name('fetch_data');
    // Route::get('/update_data{id}' ,'update_data')->name('update_data');
    Route::get('/Record' , 'userRecord')->name('userRecord');
    Route::get('/report' , 'report')->name('report');
    Route::get('/addData' , 'addData');
    Route::get('/register_page' ,'create')->name('register_page');
    Route::match(['get', 'post'],'/form/{id?}' ,'form')->name('form');
    Route::post('/register' ,'store')->name('register.store');
    Route::post('/update{id}', 'updateData')->name('users.update');
    Route::get('/delete/{id}', 'delete')->name('delete.data');
    Route::match(['get', 'post'], '/form/{id?}', 'form')->name('form');
    Route::get('/union' ,'union')->name('union');

});
