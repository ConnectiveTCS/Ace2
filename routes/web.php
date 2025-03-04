<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Publice View

Route::get('/', function () {

    $projects = App\Models\Project::all();
    return view('welcome', compact('projects'));
});

Route::get('/dashboard', function () {
    $projects = App\Models\Project::all();
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/our_projects', function () {
    $projects = App\Models\Project::all();
    return view('our_projects', compact('projects'));
})->name('our_projects');

// Authenticated View

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Projects
    Route::resource('projects', ProjectController::class);
});

require __DIR__.'/auth.php';
