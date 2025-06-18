{{-- product-detail.blade.php --}}
@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
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
        content="{{ $keywords . ', Pekanbaru, TOKOLAPTOPPKU, Toko Laptop, Laptop Seken, Laptop Second, Toko Laptop Online, Jual Laptop, Laptop Murah, Laptop Gaming, Laptop Bisnis, Laptop Pribadi' }}">
    <meta property="og:title" content="{{ $title ?? 'TOKOLAPTOPPKU' }}">
    <meta property="og:description"
        content="{{ $description ?? 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru' }}">
    <meta property="og:image" content="{{ $thumbnail ?? asset('asset/img/logo.jpg') }}">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@tokolaptoppku">
    <meta name="twitter:title" content="{{ $title ?? 'TOKOLAPTOPPKU' }}">
    <meta name="twitter:description"
        content="{{ $description ?? 'Toko Laptop Seken Terpercaya, Jual Laptop Murah, Laptop Gaming, Laptop untuk Bisnis, Laptop untuk Pribadi di Pekanbaru' }}">
    <meta name="twitter:image" content="{{ $thumbnail ?? asset('asset/img/logo.jpg') }}">
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
    {{ $slot }} {{-- ✅ PENTING agar isi halaman muncul --}}
    @livewireScripts
    @vite('resources/js/app.js')
    <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
</body>

</html>
