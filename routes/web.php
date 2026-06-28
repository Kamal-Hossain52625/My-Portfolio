<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});



Route::get('/admin', function () {
    return view('admin.login');
})->name('admin.login');

Route::resource('projects', ProjectController::class);

Route::get('/', [ProjectController::class, 'index']);


Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.login.submit');


Route::post('/admin/logout', [AdminController::class, 'logout'])
    ->name('admin.logout');

Route::get('/admin/projects', [AdminController::class, 'projects'])
    ->name('admin.projects');

Route::get('/admin/projects/create', [AdminController::class, 'create'])
    ->name('admin.projects.create');


Route::post('/admin/projects', [AdminController::class, 'store'])
    ->name('admin.projects.store');

Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::resource('projects', ProjectController::class);
});


Route::middleware('admin')->group(function () {

    Route::get('/admin/dashboard', [ProjectController::class, 'dashboard'])
        ->name('admin.dashboard');

    Route::resource('projects', ProjectController::class)
        ->except(['show']);
});

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

