<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/events', [HomeController::class, 'eventIndex'])->name('events');
Route::get('/company-summary', [HomeController::class, 'companySummary'])->name('company-summary');
Route::get('/management-message', [HomeController::class, 'managementMessage'])->name('management-message');
Route::get('/executives', [HomeController::class, 'executives'])->name('executives');
Route::get('/company-history', [HomeController::class, 'companyHistory'])->name('company-history');
