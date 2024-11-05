<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    $title = 'Available Jobs 2024';
    $jobs = ['web developer', 'software engineer', 'network engineer'];
    return view(
        'jobs.index',
        compact('title', 'jobs')
    );
})->name('jobs');

Route::get('/jobs/create', function () {
    return view('jobs.create');
})->name('jobs');
