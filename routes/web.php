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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index'] );

Route::get('/create', [EventController::class, 'create']);
Route::post('/create', [EventController::class, 'store']);
Route::get('/create/{id}', [EventController::class, 'show']);


Route::get('/contact', function () {
    return view('contact');
});