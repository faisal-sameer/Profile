<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
Route::group(['middleware' => 'prevent-back-history'], function () {

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'Profile'])->name('Profile');
    Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('main');

    Route::get('/editProfile', [App\Http\Controllers\UserProfileController::class, 'showprofile'])->name('editProfile');

    Route::any('/editProfile', [App\Http\Controllers\UserProfileController::class, 'EditProfile'])->name('editProfile');
});
