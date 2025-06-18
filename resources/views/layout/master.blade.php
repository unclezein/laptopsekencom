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
    <title>@yield('title', 'TOKOLAPTOPPKU')</title>
    <meta name="description"
        content="@yield('description', 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru')">
    <meta name="keywords"
        content="@yield('keywords') Pekanbaru, TOKOLAPTOPPKU, Toko Laptop, Laptop Seken, Laptop Second, Toko Laptop Online, Jual Laptop, Laptop Murah, Laptop Gaming, Laptop Bisnis, Laptop Pribadi">
    <meta property="og:title" content="{{ $title ?? 'TOKOLAPTOPPKU' }}">
    <meta property="og:description"
        content="@yield('description', 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru')">
    <meta property="og:image" content="{{ asset('asset/img/logo.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ request()->url() }}">
    <link rel="shortcut icon" href="{{ asset('asset/img/logo.jpg') }}" type="image/x-icon">
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
        {{-- <marquee behavior="" direction="" class="">Dapatkan Promo Pembelian Langsung Ke TOKO</marquee> --}}
    </div>
    <section class="max-w-xl w-full mx-auto fredoka">
        <img src="{{ asset('asset/img/logo.jpg') }}"
            class="w-[120px] rounded-full mx-auto text-center inset-shadow-lg mb-5" alt="logo" loading="lazy">
        <h1 class="font-bold text-center text-xl">LAPTOPSEKEN.COM</h1>
    </section>
    <section class="max-w-xl w-full mx-auto">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 text-gray-500 fill-gray-500">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center">
                <li class="me-2" role="presentation">
                    <a href="{{ route('home') }}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  @yield('menu-home') hover:fill-blue-700 hover:text-blue-700">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="w-4 ">
                                <path
                                    d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                            </svg>
                            <span>home</span>
                        </div>
                    </a>
                </li>
                <li class="me-2" role="presentation">
                    <a href="{{ route('search') }}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  @yield('menu-search') hover:fill-blue-700 hover:text-blue-700">
                        <div class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4" viewBox="0 0 512 512">
                                <path
                                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                            </svg>
                            <span>Search</span>
                        </div>
                    </a>
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
