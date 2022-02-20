<?php

use Illuminate\Support\Facades\Route;

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
    return \Inertia\Inertia::render('Home');
});

Route::get('category/{name}', [\App\Http\Controllers\CategoryController::class, 'index']);

Route::get('projects', [\App\Http\Controllers\ProjectController::class, 'index']);
Route::get('projects/{slug}', [\App\Http\Controllers\ProjectController::class, 'show']);
