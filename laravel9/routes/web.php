<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TopicController;

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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

//courses
Route::get('/course', [CourseController::class, 'index']);
Route::get('/course/create', [CourseController::class, 'create']);
Route::post('/course/store', [CourseController::class, 'store']);
Route::get('/course/{id}/edit', [CourseController::class, 'edit']);
Route::put('/course/{id}', [CourseController::class, 'update']);
Route::delete('/course/{id}', [CourseController::class, 'destroy']);

//students
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
 Route::post('/students/store', [StudentController::class, 'store']);
// Route::get('/course/{id}/edit', [CourseController::class, 'edit']);
// Route::put('/course/{id}', [CourseController::class, 'update']);
Route::delete('/students/{id}', [StudentController::class, 'destroy']);

//Topics

Route::get('/topics', [TopicController::class, 'index']);
 Route::get('/topics/create', [TopicController::class, 'create']);
  Route::post('/topics/store', [TopicController::class, 'store']);
// Route::get('/topics/{id}/edit', [TopicController::class, 'edit']);
// Route::put('/topics/{id}', [TopicController::class, 'update']);
// Route::delete('/topics/{id}', [TopicController::class, 'destroy']);




require __DIR__.'/auth.php';
