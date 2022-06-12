<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;

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

Route::get('/',[PagesController::class,'welcome'])->name('welcome'); 
Route::get('/register',[RegistrationController::class,'register'])->name('user.register');
Route::post('/register',[RegistrationController::class,'registerSubmit'])->name('user.register.submit');
Route::get('/login',[RegistrationController::class,'login'])->name('user.login');
Route::post('/login',[RegistrationController::class,'loginSubmit'])->name('user.login.submit');
Route::get('/dashbar',[RegistrationController::class,'dashbar'])->name('dashbar');



