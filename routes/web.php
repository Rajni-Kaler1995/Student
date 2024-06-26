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

// Route::get('/', function () {
//     return view('student/index');
// });

Route::get('/', [StudentController::class, 'index']);


Route::post('/createStudent', [StudentController::class, 'createStudent']);
Route::get('/duplicateRecords', [StudentController::class, 'duplicateRecords'])->name('student.duplicateRecords');
