<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeControler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
    Route::get('/{project}', [App\Http\Controllers\ProjectController::class, 'show'])->name('show');
    // Route::delete('/{project}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('destroy');
    // Route::get('/{status}/list', [ProjectController::class, 'index'])->name('index');
});

Route::prefix('event-registraion')->name('event-registraion.')->group(function () {
    Route::post('/', [App\Http\Controllers\EventRegistrationController::class, 'store'])->name('store');
    Route::get('/', [App\Http\Controllers\EventRegistrationController::class, 'index'])->name('index');
});


//admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('projects')->name('projects.')->group(function () {
        Route::get('/{status}/list', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('index');
        Route::put('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update');
        Route::get('/{project}', [App\Http\Controllers\Admin\ProjectController::class, 'show'])->name('show');
        Route::get('/{project}/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('edit');
    });
});
