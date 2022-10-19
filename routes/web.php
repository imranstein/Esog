<?php

use App\Http\Livewire\Profile;
use App\Http\Livewire\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\ContactUs;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\Front\FrontAboutController;
use App\Http\Controllers\Front\FrontNewsController;
use App\Http\Controllers\Front\FrontPublicationController;
use App\Http\Controllers\Front\FrontTeamController;
use App\Http\Controllers\Front\FrontTestimonialController;

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
// Front
Route::get('/', IndexController::class)->name('front.index');
Route::get('front-about', FrontAboutController::class)->name('front.about');
Route::get('front-contact', [ContactUs::class, 'open'])->name('front.contact');
Route::post('send-message', [ContactUs::class, 'send'])->name('front.contact.send');
Route::get('front-team', FrontTeamController::class)->name('front.team');
Route::get('front-news', FrontNewsController::class)->name('front.news');
Route::get('front-publication', FrontPublicationController::class)->name('front.publication');
Route::get('front-testimonial', FrontTestimonialController::class)->name('front.testimonial');
Route::get('front-detail/{id}/{model}', DetailController::class)->name('front.detail');
//EndFront
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
    Route::get('/home', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('students', Students::class)->name('students');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('profile', Profile::class)->name('profile');
    Route::resource('member', MembersController::class);
    Route::resource('team', TeamsController::class);
    Route::resource('news', NewsController::class);
    Route::resource('publication', PublicationController::class);
    // Route::get('/profile/change_password', [ProfileController::class, 'changePass'])->name('change.password');
    Route::post('/profile/update_password', [ProfileController::class, 'passwordUpdate'])->name('password.update');
});
