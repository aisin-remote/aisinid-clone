<?php

use App\Http\Controllers\AboutController;
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

Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'index'])->name('about');
    Route::get('/events', [HomeController::class, 'eventIndex'])->name('events');
    Route::get('/company-summary', [HomeController::class, 'companySummary'])->name('company-summary');
    Route::get('/management-message', [HomeController::class, 'managementMessage'])->name('management-message');
    Route::get('/executives', [HomeController::class, 'executives'])->name('executives');
    Route::get('/company-history', [HomeController::class, 'companyHistory'])->name('company-history');
    Route::get('/brand', [HomeController::class, 'brand'])->name('brand');
    Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
});

Route::get('/body-part', [HomeController::class, 'bodyPart'])->name('body-part');
Route::get('/engine-part', [HomeController::class, 'enginePart'])->name('engine-part');
Route::get('/drive-train', [HomeController::class, 'driveTrain'])->name('drive-train');

Route::get('/job-info', [HomeController::class, 'jobInfo'])->name('job-info');
Route::get('/job-opportunities', [HomeController::class, 'jobOpportunities'])->name('job-opportunities');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/test', function () {
    return view('website.pages.test');
});
