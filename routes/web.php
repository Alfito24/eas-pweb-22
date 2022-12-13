<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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

// Route::get('/', function () {
//     return view('register');
// });
Route::post('/register', [RegisterController::class, 'store'] );
Route::get('/register', function () {
    return view('register');
});
Route::get('/register2', [RegisterController::class, 'index2']);
Route::post('/register2', [RegisterController::class, 'store2'] );
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
