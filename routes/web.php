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
Route::get('/register-student', [RegisterController::class, 'index2']);
Route::post('/register-student', [RegisterController::class, 'store2'] );

Route::get('/register-staff', [RegisterController::class, 'index2']);
Route::post('/register-staff', [RegisterController::class, 'store2'] );

Route::get('/register-lecturer', [RegisterController::class, 'index2']);
Route::post('/register-lecturer', [RegisterController::class, 'store2'] );

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
