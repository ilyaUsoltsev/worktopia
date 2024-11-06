<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>

<body>
    <h1>{{ $title }}</h1>
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

</body>

</html>
