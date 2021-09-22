<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('dashboard', function(){
return view('admin.dashboard');

});
// change user pass

Route::get('password-change', [App\Http\Controllers\Auth\ChangePasswordController::class, 'index'])->name('password.change');
Route::post('password-change', [App\Http\Controllers\Auth\ChangePasswordController::class, 'changePass'])->name('change.user.pass');

// user profile settings

Route::get('user-profile-settings', [App\Http\Controllers\Auth\UserProfileSettingsController::class, 'index'])->name('user.profile.settings');
Route::post('user-profile-update', [App\Http\Controllers\Auth\UserProfileSettingsController::class, 'userProfileUpdate'])->name('user.profile.update');
Route::post('user-profile-update-quick', [App\Http\Controllers\Auth\UserProfileSettingsController::class, 'userProfileUpdateQuick'])->name('user.profile.update.quick');



