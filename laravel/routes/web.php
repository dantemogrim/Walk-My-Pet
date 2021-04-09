<?php

use App\Http\Controllers\AddPetController;
use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\CreateTaskController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UpdateUserController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\AccountSettingsController;
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
Route::view('/', 'index')->name('login')->middleware('guest');
Route::post('login', LoginController::class);
Route::get('/login', function () {
    return view('index');
});

// REGISTER
// Route::view('/', 'register')->name('register')->middleware('guest');
Route::post('register', RegisterController::class)->name('register')->middleware('guest');
Route::get('/register', function () {
    return view('register');
});

// LOGOUT
Route::get('logout', LogoutController::class);

/* --- [ UPDATE USER SETTINGS ] --- */

// UPDATE USER
Route::post('edit-user', UpdateUserController::class);

//Route::view('/accountsettings', 'accountsettings')->name('accountsettings')->middleware('auth');
Route::get('/accountsettings', AccountSettingsController::class)->middleware('auth');

// DELETE USER (+ THEIR PETS)
Route::post('delete-user', DeleteUserController::class);

// ADD PET
Route::post('add-pet', AddPetController::class);
Route::view('/accountsettings', 'accountsettings')->name('accountsettings')->middleware('auth');
// Route::get('/accountsettings', function () {
//     return view('accountsettings');
// });

/* --- [ TASKS ] --- */

// TASKS
// Route::post('tasks', CreateTaskController::class)->middleware('auth');
// Route::patch('tasks/{task}/complete', CompleteTaskController::class)->middleware('auth');

// // Sandra testar task view
// Route::view('/test-task', 'testTask')->middleware('auth');

/* --- [ OTHER VIEWS/PAGES ] --- */

// MAIN PAGE
Route::get('dashboard', DashboardController::class)->middleware('auth');

// Route::post('edit-pets', EditPetController::class)->middleware('auth');

/* Route Utkast! Förstår inte helt name()-grejen och editpet controller finns ej, kanske ska ha en enda EditProfileController? /Sandra
* Route::view('accountsettings')->name('profile')->middleware('auth');
* Route::post('accountsettings', EditPetController::class)->middleware('auth');
*/
