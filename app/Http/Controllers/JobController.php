<?php

// php artisan make:controller JobController

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $title = 'Available Jobs 2024';
        $jobs = ['web developer', 'software engineer', 'network engineer'];
        return view(
            'jobs.index',
            compact('title', 'jobs')
        );
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function show($id)
    {
        return view('jobs.show', ['id' => $id]);
    }

    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        return "Job title: $title, Description: $description";
    }
}
