<?php

use App\Http\Controllers\SiteController;
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

Route::controller(SiteController::class)->group(function ($route) {
    Route::get('/', 'index');
    Route::get('/Home', 'index')->name('home');
    Route::get('/About_Us', 'about_us')->name('about_us');
    Route::get('/Our_Process', 'our_process')->name('our_process');
    Route::get('/Contact_Us', 'contact_us')->name('contact_us');
});
