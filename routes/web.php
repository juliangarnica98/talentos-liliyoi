<?php

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

Route::get('/', function () { return view('welcome');});

Route::get('/admin', function () {return view('layouts.admin');});

Route::get('/vacantes', function () { return view('welcome');});


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/candidate.store', [App\Http\Controllers\CandidateController::class, 'store'])->name('candidate.store');
Route::get('/vacant.index', [App\Http\Controllers\VacantController::class, 'index'])->name('vacant.index');
