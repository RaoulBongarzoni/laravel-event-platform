<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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





Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {


        Route::get('/', function () {
            return view('admin.events.index');
        })->middleware(['auth', 'verified'])->name('index');


        Route::get('/', [EventController::class, 'index'])->name('events');

        // Admin Post CRUD
        Route::resource('events', EventController::class);
    });

require __DIR__ . '/auth.php';
