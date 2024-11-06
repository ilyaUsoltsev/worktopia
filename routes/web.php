<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create']);
Route::get('/jobs/{id}', [JobController::class, 'show']);

Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

Route::get('/home', [HomeController::class, 'index']);
