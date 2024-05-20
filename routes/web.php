<?php

use App\Http\Controllers\emailController;
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

Route::get('/email' , [emailController::class , 'email'])->name('email');

Route::get('/emailcreate' , [emailController::class , 'emailcreate'])->name('emailcreate');

Route::post('/email' , [emailController::class , 'emailsent'])->name('emailsent');
