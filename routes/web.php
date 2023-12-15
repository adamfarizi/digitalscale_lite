<?php

use App\Http\Controllers\ApproveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\RecapController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;

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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class,'index'])->name('login');
    Route::post('login_action', [AuthController::class,'login_action']);
    Route::get('/register', [AuthController::class,'register']);
    Route::post('register_action', [AuthController::class,'register_action']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');
    
    Route::get('/proses/scan', [ProsesController::class,'index_scan']);
    Route::post('/proses/scan', [ProsesController::class,'scan_process']);
    Route::get('/proses/weight', [ProsesController::class,'weight_scan']);
    Route::get('/proses/manual', [ProsesController::class,'index_manual']);
    Route::post('/proses/send', [ProsesController::class,'send_data']);
    
    Route::get('/verification', [VerificationController::class,'index']);
    Route::post('/verification/{id}', [VerificationController::class,'verification']);
    
    Route::get('/approve', [ApproveController::class,'index']);
    Route::post('/approve/{id}', [ApproveController::class,'approve']);
    
    Route::get('/recap', [RecapController::class,'index']);
    
    Route::get('/user', [UserController::class,'index']);
    Route::post('/user/register', [UserController::class,'register_action']);
    Route::get('/user/edit/{id}', [UserController::class,'edit_user']);
    Route::post('/user/edit/{id}', [UserController::class,'edit_user_action']);
    Route::delete('/user/delete/{id}', [UserController::class,'delete_user_action']);
});
