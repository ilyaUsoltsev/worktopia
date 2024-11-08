@php
    $jobsClass = request()->is('jobs') ? 'text-yellow-500 font-bold' : '';
    $saveJobsClass = request()->is('jobs/save') ? 'text-yellow-500 font-bold' : '';
    $loginClass = request()->is('login') ? 'text-yellow-500 font-bold' : '';
    $registerClass = request()->is('register') ? 'text-yellow-500 font-bold' : '';
    $dashboardClass = request()->is('dashboard') ? 'text-yellow-500 font-bold' : '';
@endphp

<header class="bg-blue-900 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Workopia</a>
        </h1>
        <nav class="hidden md:flex items-center space-x-4">
            <x-nav-link url="{{ url('/jobs') }}" :active="request()->is('jobs')">All Jobs</x-nav-link>
            <x-nav-link url="{{ url('/jobs/save') }}" :active="request()->is('jobs/save')">Saved Jobs</x-nav-link>
            <x-nav-link url="{{ url('/login') }}" :active="request()->is('login')">Login</x-nav-link>
            <x-nav-link url="{{ url('/register') }}" :active="request()->is('register')">Register</x-nav-link>
            <x-nav-link url="{{ url('/dashboard') }}" :active="request()->is('dashboard')">
                <i class="fa fa-gauge mr-1"></i> Dashboard
            </x-nav-link>

            <x-button-link url="{{ url('/jobs/create') }}" icon="edit">
                Create Job
            </x-button-link>
        </nav>
        <button id="hamburger" class="text-white md:hidden flex items-center">
            <i class="fa fa-bars text-2xl"></i>
        </button>
    </div>
    <!-- Mobile Menu -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2">
        <x-nav-link url="{{ url('/jobs') }}" :active="request()->is('jobs')">All Jobs</x-nav-link>
        <x-nav-link url="{{ url('/jobs/save') }}" :active="request()->is('jobs/save')">Saved Jobs</x-nav-link>
        <x-nav-link url="{{ url('/login') }}" :active="request()->is('login')">Login</x-nav-link>
        <x-nav-link url="{{ url('/register') }}" :active="request()->is('register')">Register</x-nav-link>
        <x-nav-link url="{{ url('/dashboard') }}" :active="request()->is('dashboard')">
            <i class="fa fa-gauge mr-1"></i> Dashboard
        </x-nav-link>
        <x-button-link url="{{ url('/jobs/create') }}" icon="edit">
            Create Job
        </x-button-link>
    </nav>
</header>
