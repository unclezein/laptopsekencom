<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('asset/css/flowbite.min.css') }}">
    @livewireStyles
    <style>
        .fredoka {
            font-family: "Fredoka", sans-serif;
        }
    </style>
</head>

<body class="text-slate-800">
    <div class="max-w-xl mx-auto p-2 bg-linear-to-bl from-cyan-200 from-40% to-cyan-500 mb-5 rounded-lg">
        <marquee behavior="" direction="" class="">Dapatkan Promo Pembelian Langsung Ke TOKO</marquee>
    </div>
    <section class="max-w-xl w-full mx-auto fredoka">
        <img src="{{ asset('asset/img/logo.jpg') }}"
            class="w-[120px] rounded-full mx-auto text-center inset-shadow-lg mb-5" alt="logo">
        <h1 class="font-bold text-center text-xl">LAPTOPSEKEN.COM</h1>
    </section>
    <section class="max-w-xl w-full mx-auto mx-auto">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 text-gray-500">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center">
                <li class="me-2" role="presentation">
                    <a href="{{route('home')}}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  @yield('menu-home') hover:text-blue-700">Home</a>
                </li>
                <li class="me-2" role="presentation">
                    <a href="{{ route('search') }}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  @yield('menu-search') hover:text-blue-700">Search</a>
                </li>
                <li class="me-2" role="presentation">
                    <a href=""
                        class="inline-block p-4 border-b-2 rounded-t-lg  @yield('menu-about') hover:text-blue-700">About</a>
                </li>
            </ul>
        </div>
        <div class="p-4">
            @yield('content')
        </div>
    </section>
    @livewireScripts

    @vite('resources/js/app.js')
    <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
</body>

</html>
