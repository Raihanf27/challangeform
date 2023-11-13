<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create_student', [StudentController::class, 'create'])->name('create_student');
Route::post('/store_student', [StudentController::class, 'store'])->name('store_student');
Route::get('/view_students', [StudentController::class, 'view'])->name('view_students');
Route::delete('/delete_student/{id}', [StudentController::class, 'delete'])->name('delete_student');
