<?php

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
/*

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/contact_us', function () {
    return view('fontend\contact_us');
});

Route::get('/about_us', function () {
    return view('fontend\about_us');
});

Route::get('/',[\App\Http\Controllers\Fontend\HomeController::class,'index'])->name( name: 'admin.home');

Route::get('/backend',[\App\Http\Controllers\Backend\BackendController::class,'index'])->name( name: 'admin.backend');


Route::get('/dashboard',[\App\Http\Controllers\Backend\DashboardController::class,'index'])->name( name: 'admin.dashboard');
