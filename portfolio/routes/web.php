<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
use App\Http\Controllers\ContactController;

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send']);
use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/project', [AdminController::class, 'store']);
Route::get('/admin/delete/{id}', [AdminController::class, 'delete']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);

Route::get('/admin/messages', [AdminController::class, 'messages']);
Route::get('/', function () {
    return view('index');
})->name('home');
use App\Models\Project;

Route::get('/projects', function () {
    $projects = Project::all();
    return view('projects', compact('projects'));
});