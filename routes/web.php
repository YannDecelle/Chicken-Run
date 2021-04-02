<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::middleware(['auth:sanctum', 'verified'])->group(function() {

//     Route::get('/chicken', [InsertProject::class, "index"])->name('chicken.index');

//     Route::get('/chicken/{id}/edit', [InsertProject::class, "edit"])->name('chicken.edit');

//     Route::put('/chicken/{id}', [InsertProject::class, "update"])->name('chicken.update');

//     Route::get('/chicken/add', [InsertProject::class, "create"])->name('chicken.create');

//     Route::post('/chicken', [InsertProject::class, "store"])->name('chicken.store');

//     Route::post('/chicken', [InsertProject::class, "store"])->name('chicken.delete');
// });



Route::middleware(['auth:sanctum', 'verified'])->get('/chicken', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');



