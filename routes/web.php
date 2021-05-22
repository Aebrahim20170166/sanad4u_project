<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\userRegistration;
use App\Http\Controllers\User\validationController;

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
//logout
Route::get('/logout', function () {
    Session::flush();
    return redirect()->route('home');
})->name('logout');
//checkLogin_data_and_login
