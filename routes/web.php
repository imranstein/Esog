<?php

use App\Http\Livewire\Profile;
use App\Http\Livewire\Students;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Front\ContactUs;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdvocacyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuidelinesController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\Front\DetailController;
use App\Http\Controllers\Front\MemberController;
use App\Http\Controllers\MemberCourseController;
use App\Http\Controllers\Front\FrontNewsController;
use App\Http\Controllers\Front\FrontTeamController;
use App\Http\Controllers\Front\FrontAboutController;
use App\Http\Controllers\Front\FrontPublicationController;
use App\Http\Controllers\Front\FrontTestimonialController;
use App\Http\Controllers\Front\AdvocacyController as FrontAdvocacyController;
use App\Http\Controllers\Front\CourseController as FrontCourseController;
use App\Http\Controllers\Front\GuidelinesController as FrontGuidelinesController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\ProjectController;

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
Route::get('front-guidelines', FrontGuidelinesController::class)->name('front.guidelines');
Route::get('front-advocacy', FrontAdvocacyController::class)->name('front.advocacy');
Route::get('front-testimonial', FrontTestimonialController::class)->name('front.testimonial');
Route::get('front-detail/{id}/{model}', DetailController::class)->name('front.detail');
Route::get('front-member', [MemberController::class, 'index'])->name('front.member');
Route::get('front-member/create', [MemberController::class, 'create'])->name('front.member.create');
Route::post('front-memberRegister', [MemberController::class, 'store'])->name('front.memberRegister');
Route::get('front-course', FrontCourseController::class)->name('front.course');
Route::get('front-project', FrontProjectController::class)->name('front.project');
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
    Route::get('/home', DashboardController::class)->name('dashboard');
    Route::get('students', Students::class)->name('students');
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::get('profile', Profile::class)->name('profile');
    Route::resource('member', MembersController::class);
    Route::post('member/{member}/approve', [MembersController::class, 'approve'])->name('member.approve');
    Route::resource('team', TeamsController::class);
    Route::resource('news', NewsController::class);
    Route::resource('publication', PublicationController::class);
    Route::resource('guidelines', GuidelinesController::class);
    Route::resource('advocacy', AdvocacyController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('course', CourseController::class);
    Route::resource('project', ProjectController::class);
    Route::get('course/enroll/{course}', [CourseController::class, 'enroll'])->name('course.enroll');
    Route::post('course/approve/{course}', [MemberCourseController::class, 'approve'])->name('course.approve');
    Route::resource('memberCourse', MemberCourseController::class);
    Route::get('startCourse/{id}', [MemberCourseController::class, 'start'])->name('startCourse');
    Route::get('finishCourse/{id}', [MemberCourseController::class, 'finish'])->name('finishCourse');
    // Route::get('/profile/change_password', [ProfileController::class, 'changePass'])->name('change.password');
    Route::post('/profile/update_password', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    Route::get('myProfile', [MyProfileController::class, 'index'])->name('myProfile');
    Route::get('myProfile/{id}/edit', [MyProfileController::class, 'edit'])->name('myProfile.edit');
    Route::put('myProfile/{id}', [MyProfileController::class, 'update'])->name('myProfile.update');
    Route::put('editImage', [MyProfileController::class, 'editImage'])->name('editImage');
    Route::get('logout', [ProfileController::class, 'logout'])->name('logout');
    Route::post('image-upload', [NewsController::class, 'storeImage'])->name('image.upload');
});
