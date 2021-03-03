<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SulthanController;
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
    return view('cv');
});

Route::get('/name', function () {
    return view('name');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/email', function () {
    return view('email');
});

Route::get('sulthan/profile',[SulthanController::class, 'profile']);
Route::get('sulthan/name',[SulthanController::class, 'name']);
Route::get('sulthan/email',[SulthanController::class, 'email']);

Route::get('/get-book/{id}', [SulthanController::class, 'get']);