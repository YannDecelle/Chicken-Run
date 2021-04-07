<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\chickenController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/chicken', [chickenController::class, "index"])->name('chicken.index');

    Route::get('/chicken/{id}/edit', [chickenController::class, "edit"])->name('chicken.edit');

    // Route::get('/chicken/{id}', [chickenController::class, "view"])->name('chicken.view');

    Route::put('/chicken/{id}', [chickenController::class, "update"])->name('chicken.update');

    Route::get('/chicken/add', [chickenController::class, "create"])->name('chicken.create');

    Route::post('/chicken', [chickenController::class, "store"])->name('chicken.store');

    Route::delete('/chicken/{id}', [chickenController::class, "destroy"])->name('chicken.destroy');

});



