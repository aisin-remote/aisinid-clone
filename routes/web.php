<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
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
    Route::get('/company-summary/{company?}', [HomeController::class, 'companySummary'])->name('company-summary');
    Route::get('/management-message', [HomeController::class, 'managementMessage'])->name('management-message');
    Route::get('/management-policy', [HomeController::class, 'managementPolicyIndex'])->name('management-policy');
    Route::get('/management-policy/{company}', [HomeController::class, 'managementPolicy'])->name('management-policy-list');
    Route::get('/company-history', [HomeController::class, 'companyHistory'])->name('company-history-main');
    Route::get('/company-history/{company}', [HomeController::class, 'companyHistory'])->name('company-history');
    Route::get('/brand', [HomeController::class, 'brand'])->name('brand');
    Route::get('/company-core-value', [HomeController::class, 'coreValue'])->name('core');

    Route::prefix('executives')->group(function () {
        Route::get('/', [HomeController::class, 'executiveIndex'])->name('executives');
        Route::get('/{company}', [HomeController::class, 'executives'])->name('executive-list');
    });

    Route::prefix('awards')->group(function () {
        Route::get('/', [HomeController::class, 'awardIndex'])->name('awards');
        Route::get('/{company}', [HomeController::class, 'awards'])->name('award-list');
    });
});

Route::prefix('products')->group(function () {
    Route::get('/', [HomeController::class, 'productIndex'])->name('products');
    Route::get('/{product}', [HomeController::class, 'products'])->name('product-list');
});


Route::get('/job-info', [HomeController::class, 'jobInfo'])->name('job-info');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendContactMail'])->name('contact-us');

Route::get('/search', function () {
    return view('website.pages.search');
});


Route::get('/test', function () {
    return view('website.pages.test');
});
