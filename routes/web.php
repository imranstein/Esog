<?php

use App\Http\Livewire\Profile;
use App\Http\Livewire\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
Route::middleware([
    'auth:web',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('students', Students::class)->name('students');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('profile', Profile::class)->name('profile');
    Route::resource('member', MembersController::class);
    // Route::get('/profile/change_password', [ProfileController::class, 'changePass'])->name('change.password');
    Route::post('/profile/update_password', [ProfileController::class, 'passwordUpdate'])->name('password.update');
});
