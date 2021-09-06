<?php

use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('admin.dashboard');
})->name('dash');


Route::resource('staff','App\Http\Controllers\StaffController');
Route::get('staff/trash/{id}', 'App\Http\Controllers\StaffController@trash')->name('staff.trash');
Route::get('staff-trash', 'App\Http\Controllers\StaffController@trashData')->name('staff.trash.all');
Route::resource('student','App\Http\Controllers\StudentController');
