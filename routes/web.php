<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\userRegistration;
use App\Http\Controllers\User\validationController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Teacher\TeacherController;

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
Route::view('success','success')->name('success');
Route::view('home','welcome')->name('home');
Route::post('createAccount',[userRegistration::class,'handle_signup'])->name("createAccount");
Route::post('validate',[validationController::class,'checkLogin_data_and_login'])->name("validate");
Route::post('update_profile',[StudentController::class,'update_profile'])->name("update_profile");


//checkLogin_data_and_login


// logout

Route::get('/logout', function () {
    Session::flush();
    return redirect()->route('home');
})->name('logout');

// student

Route::get('/student' , [StudentController::class , 'index']);
Route::get('/student/Groups' , [StudentController::class , 'group']);
Route::get('/student/Favorites' , [StudentController::class , 'favorite']);
Route::get('/student/Setting' , [StudentController::class , 'setting']);
Route::get('/student/Statement' , [StudentController::class , 'statement']);


// teacher

Route::get('/teacher' , [TeacherController::class , 'index']);
Route::get('/teacher/settings' , [TeacherController::class , 'settings']);
Route::get('/teacher/courses' , [TeacherController::class , 'courses']);

// groups

Route::view('groups','groups.all-groups')->name('groups');
