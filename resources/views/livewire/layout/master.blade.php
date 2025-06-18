<!doctype html>
<html>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9VWNF1EN1J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-9VWNF1EN1J');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>{{ $title ?? 'TOKOLAPTOPPKU' }}</title>
    <meta name="description"
        content="{{ $description ?? 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru' }}">
    <meta name="keywords"
        content="{{ $keywords ?? 'Pekanbaru, TOKOLAPTOPPKU, Toko Laptop, Laptop Seken, Laptop Second, Toko Laptop Online, Jual Laptop, Laptop Murah, Laptop Gaming, Laptop Bisnis, Laptop Pribadi' }}">
    <meta property="og:title" content="{{ $title ?? 'TOKOLAPTOPPKU' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru' }}">
    <meta property="og:image" content="{{ asset('asset/img/logo.png') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ request()->url() }}">
    <link rel="shortcut icon" href="{{ asset('asset/img/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('asset/css/flowbite.min.css') }}">
    @livewireStyles
    <style>
        .fredoka {
            font-family: "Fredoka", sans-serif;
        }

        /* HTML: <div class="loader"></div> */
        .loader {
            color: #0ea5e9;
            width: 4px;
            aspect-ratio: 1;
            border-radius: 50%;
            box-shadow: 19px 0 0 7px, 38px 0 0 3px, 57px 0 0 0;
            transform: translateX(-38px);
            animation: l21 .5s infinite alternate linear;
        }

        @keyframes l21 {
            50% {
                box-shadow: 19px 0 0 3px, 38px 0 0 7px, 57px 0 0 3px
            }

            100% {
                box-shadow: 19px 0 0 0, 38px 0 0 3px, 57px 0 0 7px
            }
        }
    </style>
</head>

<body class="text-slate-800">
    <section id="global-loader"
        class="hidden bg-white/80 h-screen w-full fixed z-[100] top-0 left-0 flex justify-center items-center">
        <div class="loader"></div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loader = document.getElementById('global-loader');

            document.querySelectorAll('a[href]').forEach(link => {
                const href = link.getAttribute('href');

                // Abaikan link kosong, #, atau javascript:void(0)
                if (!href || href.startsWith('#') || href.startsWith('javascript')) return;

                link.addEventListener('click', function(e) {
                    // Abaikan klik jika pakai Ctrl/Meta (cmd)/Shift (tab baru)
                    if (e.ctrlKey || e.metaKey || e.altKey || e.shiftKey) return;

                    // Cek apakah link eksternal (beda host)
                    const isExternal = this.hostname !== window.location.hostname;

                    if (!isExternal) {
                        // Jika internal, tampilkan loader
                        loader.classList.remove('hidden');
                    }
                });
            });
        });
    </script>

    <section class="max-w-xl w-full mx-auto fredoka mt-5">
        <img src="{{ asset('asset/img/logo.png') }}"
            class="w-[120px] rounded-full mx-auto text-center inset-shadow-lg mb-5" alt="logo" loading="lazy">
        <h1 class="font-bold text-center text-xl">LAPTOPSEKEN.COM</h1>
        <div class="flex justify-center gap-3" id="sosmed">
            <a href="https://www.instagram.com/tokolaptoppku" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z" />
                </svg>
            </a>
            <a href="https://www.facebook.com/khoirul.mizan.568" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                </svg>
            </a>
            <a href="https://www.tiktok.com/@tokolaptoppku" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                </svg></a>
            <a href="https://api.whatsapp.com/send/?phone=6281273979750&text&type=phone_number&app_absent=0"
                target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z" />
                </svg>
            </a>
            <a href="https://maps.app.goo.gl/FPWpb9u7kqyq16Gv6" target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                    class="h-5 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out">
                    <path
                        d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                </svg></a>
        </div>
    </section>
    <section class="max-w-xl w-full mx-auto">
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 text-gray-500 fill-gray-500">
            <ul class="flex flex-wrap justify-center -mb-px text-sm font-medium text-center">
                <li class="me-2" role="presentation">
                    <a href="{{ route('home') }}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  {{ ($menuActive ?? '') === 'home' ? 'text-blue-800 fill-blue-800 border-blue-800' : '' }} hover:fill-blue-700 hover:text-blue-700">
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
                        class="inline-block p-4 border-b-2 rounded-t-lg  {{ ($menuActive ?? '') === 'search' ? 'text-blue-800 fill-blue-800 border-blue-800' : '' }} hover:fill-blue-700 hover:text-blue-700">
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
                    <a href="{{ route('about') }}"
                        class="inline-block p-4 border-b-2 rounded-t-lg  {{ ($menuActive ?? '') === 'about' ? 'text-blue-800 fill-blue-800 border-blue-800' : '' }} hover:fill-blue-700 hover:text-blue-700"">About</a>
                </li>
            </ul>
        </div>
        <div class="p-4">
            {{ $slot }}
        </div>
    </section>
    @livewireScripts

    @vite('resources/js/app.js')
    <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
</body>

</html>
