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
    return view('welcome');
});


Route::get('/project-list', function () {
    return view('project-list');
});

Route::get('/project-detail', function () {
    return view('project-detail');
});

Route::get('/task-comment', function () {
    return view('task-comment');
});

Auth::routes();

Route::middleware('auth')->group(function () {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home', App\Http\Livewire\Dashboard::class)->name('home');
    Route::get('/project/{slug}', App\Http\Livewire\Project::class)->name('projects.show');
});
