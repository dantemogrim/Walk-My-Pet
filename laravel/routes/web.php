<?php

use App\Http\Controllers\AddPetController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateUserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

    Docs: "If your route only needs to return a view,
    you may use the Route::view method"
|
*/

/* --- [ LOGIN SYSTEM ] --- */

// START PAGE + LOGIN
Route::view('/', 'index');
Route::view('/login', 'index')->middleware('guest');
Route::post('login', LoginController::class);

// REGISTER
Route::view('/register', 'register')->middleware('guest');
Route::post('register', RegisterController::class)->name('register')->middleware('guest');

// LOGOUT
Route::get('logout', LogoutController::class);

/* --- [ UPDATE USER SETTINGS ] --- */

// UPDATE USER
Route::post('edit-user', UpdateUserController::class);
Route::view('/accountsettings', 'accountsettings')->name('profile')->middleware('auth');

// DELETE USER (+ THEIR PETS)
Route::post('delete-user', DeleteUserController::class);

// ADD PET
Route::post('add-pet', AddPetController::class);
Route::view('/accountsettings', 'accountsettings')->name('accountsettings')->middleware('auth');

/* --- [ OTHER VIEWS/PAGES ] --- */

// MAIN PAGE
Route::get('dashboard', DashboardController::class)->middleware('auth');
