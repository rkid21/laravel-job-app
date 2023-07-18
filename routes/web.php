<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

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
            //url                   //func na tatawagin    //route or page na pupuntahan
Route::get('/job', [JobController::class, 'index'])->name('job.index');
Route::get('/job/create', [JobController::class, 'create'])->name('job.create');
//post method dapat pag add
Route::post('/job', [JobController::class, 'store'])->name('job.store');
Route::get('/job/{job}/edit', [JobController::class, 'edit'])->name('job.edit');
Route::put('/job/{job}/update', [JobController::class, 'update'])->name('job.update');
Route::delete('/job/{job}/delete', [JobController::class, 'delete'])->name('job.delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
