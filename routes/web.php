<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeControler;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [WelcomeControler::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/category/{category}/chain/{chain?}', [App\Http\Controllers\ProjectController::class, 'index'])->name('index');
    Route::post('/', [App\Http\Controllers\ProjectController::class, 'store'])->name('store');
    Route::get('/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('create');
    Route::get('/search', [App\Http\Controllers\ProjectController::class, 'search'])->name('search');
    Route::get('/success', [App\Http\Controllers\ProjectController::class, 'success'])->name('success');
    Route::get('/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('show');
});

Route::prefix('event-registraion')->name('event-registraion.')->group(function () {
    Route::post('/', [App\Http\Controllers\EventRegistrationController::class, 'store'])->name('store');
    Route::get('/', [App\Http\Controllers\EventRegistrationController::class, 'index'])->name('index');
});

Route::prefix('payments')->name('payments.')->group(function () {
    Route::post('/', [App\Http\Controllers\PaymentController::class, 'store'])->name('store');
});

//admin routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/{status}/list', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('index');
        Route::put('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update');
        Route::put('/toggle-buttons/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'updateOnToogle'])->name('update.toggle');
        Route::get('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'show'])->name('show');
        Route::get('/{project}/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('edit');
    });
    Route::prefix('payments')->name('payments.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('index');
    });
    Route::prefix('email-templates')->name('email-templates.')->group(function () {
        Route::get('/edit', [App\Http\Controllers\Admin\EmailTemplateController::class, 'edit'])->name('edit');
        Route::put('/update', [App\Http\Controllers\Admin\EmailTemplateController::class, 'update'])->name('update');
    });
});
