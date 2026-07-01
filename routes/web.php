<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ContactController;

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

// Public Routes
Route::get('/', function () {
    return view('welcome');
});
Route::post('/contact', [ContactController::class, 'storePublic']);

// Authentication Routes
Auth::routes();

// Admin Routes
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/', function() { return redirect()->route('home'); });
    
    Route::resource('teachers', TeacherController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('notices', NoticeController::class);
    Route::resource('results', ResultController::class);
    Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
});
