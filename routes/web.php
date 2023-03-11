<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProjectController;

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

Route::get('/', function () {
    return view('index');
});


//Route::view('/submit-project', 'include.views.project.create')->name('submitProject');

Route::get('/project', [PostController::class, 'index']);

Route::get('/create-project', [ProjectController::class, 'index']);
Route::post('/create-project', [ProjectController::class, 'create']);