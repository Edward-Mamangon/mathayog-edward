<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/avatar_selection', [Controller::class, 'avatar_selection']);
Route::get('/activity', [Controller::class, 'activity']);
Route::get('/dashboard', [Controller::class, 'dashboard']);

Route::get('register', [Controller::class, 'create'])->name('register');
Route::post('register', [Controller::class, 'saveUser']);
