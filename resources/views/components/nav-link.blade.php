@props(['active' => false, 'url' => '/', 'icon' => null, 'mobile' => null])

<a href="{{ $url }}"
    class="text-white hover:underline block lg:inline-block py-2 {{ $active ? 'text-yellow-500 font-bold' : '' }}">
    @if ($icon)
        <i class="fa fa-{{ $icon }} mr-1"></i>
    @endif
    {{ $slot }}
</a>
