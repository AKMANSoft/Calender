<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;

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

Route::resource('projects', ProjectController::class, ['except' => ['index'] ]);
Route::prefix('projects')->name('projects.')->group(function () {
    Route::get('/{status}/list', [ProjectController::class, 'index'])->name('index');
    // Route::get('/update-status/{status}', [ProjectController::class, 'updateStatus'])->name('status.update');
});

//Route::view('/submit-project', 'include.views.project.create')->name('submitProject');

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/create-project', [ProjectController::class, 'index']);
Route::post('/create-project', [ProjectController::class, 'create']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/requests', [ProjectController::class, 'requests'])->name('requests');

Route::post('/profile', [ProfileController::class, 'index'])->name('preview');
Route::post('/profile-update', [ProfileController::class, 'update'])->name('preview');


Route::post('/project-approved', [ProjectController::class, 'approved']);

Route::post('/project-approved-submit', [ProjectController::class, 'approved_submit']);

Route::get('/published', [ProjectController::class, 'view_approved_proj'])->name('published');

Route::post('/project-rejected', [ProjectController::class, 'rejected']);

Route::post('/project-rejected-submit', [ProjectController::class, 'rejected_submit']);

Route::get('/offline', [ProjectController::class, 'view_rejected_proj'])->name('offline');

//

Route::get('/project-requests', [ProjectController::class, 'project_requests'])->name('project_requests');


Route::post('/project-approved-update', [ProjectController::class, 'status_update_approved']);

Route::post('/project-rejected-update', [ProjectController::class, 'status_update_rejected']);


Route::get('/project-approved-view', [ProjectController::class, 'project_approved'])->name('project_approved');

Route::get('/project-rejected-view', [ProjectController::class, 'project_rejected'])->name('project_rejected');

