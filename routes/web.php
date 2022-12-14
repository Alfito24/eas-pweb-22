<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LectureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RequestController;
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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/test', function () {
    return view('dashboard.template');
});
Route::get('/register-student', [RegisterController::class, 'index2']);
Route::post('/register-student', [RegisterController::class, 'store2'] );

Route::get('/register-staff', [RegisterController::class, 'index2']);
Route::post('/register-staff', [RegisterController::class, 'store2'] );

Route::get('/register-lecturer', [RegisterController::class, 'index2']);
Route::post('/register-lecturer', [RegisterController::class, 'store2'] );

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/make-request', [RequestController::class, 'index']);
Route::post('/make-request', [RequestController::class, 'store']);

Route::get('/dashboard_user', [RequestController::class, 'index']);
Route::get('/dashboard_user/listrequest/{id}', [RequestController::class, 'index']);
Route::get('/dashboard_user/listrequest', [RequestController::class, 'listRequest']);
Route::get('/editrequest/{id}', [RequestController::class, 'editRequest']);
Route::post('/editrequest/{id}', [RequestController::class, 'updateRequest']);

Route::get('/dashboard_admin', [DashboardController::class, 'index']);
Route::get('/dashboard_admin/viewrequest/{id}', [DashboardController::class, 'viewRequest']);
Route::post('/acceptadmin/{id}', [DashboardController::class, 'accept']);


Route::get('/dashboard_lecture', [LectureController::class, 'index']);
Route::get('/dashboard_lecture/viewrequest/{id}', [LectureController::class, 'viewRequest']);
Route::post('/acceptlecture/{id}', [LectureController::class, 'accept']);
