<!DOCTYPE html>
<html lang="en">

<head>
    <x-head>{{ $title }} - {{ $app }}</x-head>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <x-sidebar>
        <x-slot:subMenu>
            @if (!empty($subMenu))
                {{ $subMenu }}
            @endif
        </x-slot:subMenu>
    </x-sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbar>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Menu</a></li>
            @if (!empty($subMenu))
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                        href="javascript:;">{{ $subMenu }}</a></li>
            @endif
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ $title }}</li>

        </x-navbar>
        <!-- End Navbar -->
        <div class="container-fluid py-2">
            {{ $slot }}
        </div>

        <x-footer>{{ $app }}</x-footer>
    </main>

    <x-foot></x-foot>
</body>

</html>
