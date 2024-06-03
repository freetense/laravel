<?php

use App\Http\Controllers\FormController;
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
Route::match(['get', 'post'], '/', [FormController::class, 'index']);
Route::match(['get', 'post'],'/edit/{id}', [FormController::class, 'edit']);
Route::match(['get', 'post'],'/delete/{id}', [FormController::class, 'delete']);
