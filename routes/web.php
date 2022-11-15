<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\Test1Controller;

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
    return view('home');
});

// Route::get('/home', [HomeController::class, 'index']
//     )->name('home');

Route::get('/homestay', [HomeStayController::class, 'index']
    )->name('homestay');

Route::get('/culinary', [CulinaryController::class, 'index']
    )->name('culinary');

Route::get('/test1', [Test1Controller::class, 'index']
)->name('test1');