<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome' );
Route::view('/schedule', 'schedule' );
Route::view('/courses', 'courses' );
Route::view('/aboutus', 'aboutus' );
Route::view('/vehicle', 'vehicle' );
Route::view('/contact', 'contact' );
