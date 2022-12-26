<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\SeriesController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course/{slug}', [CourseController::class, 'show'])->name('course');



Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/topics/{slug}', [TopicController::class,'index'])->name('topics');
Route::get('/series/{id}', [SeriesController::class,'index'])->name('series');


// Route::get('/archive_type/{id}', [HomeController::class,'archive'])->name('archive');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
