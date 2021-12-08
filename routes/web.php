<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TestController;

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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/signin', [SigninController::class, 'index']);
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup/store', [SignupController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/clients', [ClientsController::class, 'index']);
Route::get('/clients/profile', [ClientsController::class, 'clientProfile']);
Route::get('/email-template', [TestController::class, 'emailTemplate']);
