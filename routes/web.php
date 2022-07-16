<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\TeamController;

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

Route::get('/', [TrackController::class, 'map'])->name('index');
Route::get('/track/{track}', [TrackController::class, 'map'])->name('track');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/tracks', [TrackController::class, 'index'])
            ->name('tracks');

        Route::get('/track/{track}', [TrackController::class, 'show'])
            ->name('track');

        /*Route::post('/track/update/{track}', [TrackController::class, 'update'])
            ->name('track.update');

        Route::post('/marshalpost/store', [MarshalPostController::class, 'store'])
            ->name('marshalpost.store');*/

        Route::get('/teams', [TeamController::class, 'index'])
            ->name('teams');
    });
});
