<?php

use App\Http\Controllers\TestCrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/employee','App\Http\Controllers\EmployeeController@index');

Route::get('/dashboard','App\Http\Controllers\TestCrudController@index')->name('dashboard');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
//Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
//    return view('dashboard');
//})->name('home');
Route::get('/delete/{id}','App\Http\Controllers\TestCrudController@delete')->name('delete');
Route::get('/edit/{id}','App\Http\Controllers\TestCrudController@edit')->name('edit');
Route::post('/update','App\Http\Controllers\TestCrudController@update')->name('update');
Route::get('/district','App\Http\Controllers\HomeController@index');
Route::post("/addmember",[TestCrudController::class,'add'])->name('add');

Route::get('/helper','App\Http\Controllers\divissionController@indexing')->name('indexing');
//Route::get('/helper','App\Http\Controllers\divissionController@get_thana')->name('get_thana');
Route::get('/thana/{id}','App\Http\Controllers\divissionController@get_thana')->name('thana');
Route::get('/upazila/{id}','App\Http\Controllers\divissionController@get_upazila')->name('upazila');
Route::get('/name/{id}','App\Http\Controllers\divissionController@get_name')->name('name');
Route::get('/student',[StudentController::class,'record'])->name('student');
Route::post('/add-student',[StudentController::class,'addStudent'])->name('student.add');
Route::get('/student/{id}',[StudentController::class,'getStudentById']);
Route::put('/student',[StudentController::class,'updateStudent'])->name('student.update');
//Route::post('/student/{id}',[StudentController::class,'updateStudent'])->name('student.update');
Route::delete('student-delete/{id}',[StudentController::class,'deleteStudent'])->name('student-delete');
