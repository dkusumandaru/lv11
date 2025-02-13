<a {{ $attributes }}
    class="nav-link {{ $active ? 'active bg-red text-white':'text-white' }}"
    aria-current="{{ $active ? 'page':false }}">
    {{ $slot }}
</a>