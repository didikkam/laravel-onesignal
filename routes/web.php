<?php

use App\Http\Controllers\MessageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'message', 'as' => 'message.'], function () {
    Route::get('/', [MessageController::class, 'index'])->name('index');
    Route::post('/send', [MessageController::class, 'store'])->name('store');
});

