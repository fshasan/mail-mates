<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Romatoo\HomeController;

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

Route::get("/", function () {
    return view("welcome");
});

Route::controller(HomeController::class)->group(function(){

    Route::get('/login', 'index')->name('login');

    Route::get('/registration', 'registration')->name('registration');

    Route::get('/logout', 'logout')->name('logout');

    Route::post('/validate_registration', 'validate_registration')->name('validateRegistration');

    Route::post('/validate_login', 'validate_login')->name('validateLogin');

    Route::get('/dashboard', 'dashboard')->name('dashboard');
    
    Route::post('/sent_email', 'sendEmail')->name('sendEmail');

});

