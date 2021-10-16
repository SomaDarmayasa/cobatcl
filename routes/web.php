<?php

use App\Http\Controllers\StudentsController;
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
    return view('layout.template');

});

Route::get('/student',[StudentsController::class,('index')]);
Route::get('/createstudents',[StudentsController::class,('create')]);
Route::post('/student',[StudentsController::class,('store')]);
Route::get('/edit/{student}',[StudentsController::class,('edit')]);
Route::put('/edit/{student}',[StudentsController::class,('update')]);
Route::delete('/delete/{student}',[StudentsController::class,('delete')]);
