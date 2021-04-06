<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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
// show Login if no url params
Route::view('/', 'index')->middleware('guest');

// show Login if login as url param
Route::view('/', 'index')->name('login')->middleware('guest');
Route::post('login', LoginController::class);

// Route::view('/', 'index')->name('register')->middleware('guest');
Route::view('/register', 'register')->name('register')->middleware('guest');
Route::post('register', RegisterController::class);

// Register page (Docs: "If your route only needs to return a view,
// you may use the Route::view method" --> så ovan Route::view ~borde~ räcka)
Route::get('/register', function () {
    return view('register');
});

Route::get('logout', LogoutController::class);
Route::get('dashboard', DashboardController::class)->middleware('auth');
Route::post('tasks', CreateTaskController::class)->middleware('auth');
Route::patch('tasks/{task}/complete', CompleteTaskController::class)->middleware('auth');

/* Route Utkast! Förstår inte helt name()-grejen och editpet controller finns ej, kanske ska ha en enda EditProfileController? /Sandra
* Route::view('profile')->name('add-pet')->middleware('auth');
* Route::post('profile', AddPetController::class)->middleware('auth');
*
* Route::view('profile')->name('edit-pet')->middleware('auth');
* Route::post('profile', EditPetController::class)->middleware('auth');
*/

// Route::view('/', 'index')->name('register')->middleware('guest');
