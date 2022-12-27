<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomestayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\SouvenirController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\ContactUsController;
use App\Models\Listing;

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
    return view('home', [
        'heading' => 'Latest Listings',
        'home' => [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'lorem lorem lorem'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'lorem lorem lorem'
        ]
    ]
        ]);
});

// , [
//     'heading' => 'Latest Listings',
//     'home' => [
//     [
//         'id' => 1,
//         'title' => 'Listing One',
//         'description' => 'lorem lorem lorem'
//     ],
//     [
//         'id' => 2,
//         'title' => 'Listing Two',
//         'description' => 'lorem lorem lorem'
//     ]
// ]
//     ]


// Route::get('/homestay', function () {
//     return view('homestay');
// });

Route::get('/homestay', [HomeStayController::class, 'index']
    )->name('homestay');

Route::get('/culinary', [CulinaryController::class, 'index']
    )->name('culinary');

Route::get('/souvenir', [SouvenirController::class, 'index']
)->name('souvenir');

Route::get('/destination', [DestinationController::class, 'index']
)->name('destination');

Route::get('/promo', [PromoController::class, 'index']
)->name('promo');

Route::get('/contactUs', [ContactUsController::class, 'index']
)->name('contactUs');

Route::get('/destinationDetail', [DestinationDetailController::class, 'index']
)->name('destinationDetail');
