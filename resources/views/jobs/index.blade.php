@extends('layout')

@section('content')
    <h1>All Jobs</h1>
    @if (!empty($jobs))
        <ul>
            @foreach ($jobs as $job)
                {{-- comming form $loop variable which is built in already inside any loop --}}
                <li>{{ $loop->iteration }} - {{ $job }}</li>
            @endforeach
        </ul>
    @else
        <p>No jobs available</p>
    @endif
@endsection
