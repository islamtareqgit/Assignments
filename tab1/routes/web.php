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




Route::resource('student', 'App\Http\Controllers\StaffFeatures');

Route::get('/', function(){
    return view('home');
});

Route::get('contact', function(){
    return view('pages.contact');
});

Route::get('/', App\Http\Controllers\FrontEndController::class, 'homePageShow');

Route::get('contact', App\Http\Controllers\FrontEndController::class, 'contactPageShow');

Route::get('about', App\Http\Controllers\FrontEndController::class, 'aboutPageShow');

