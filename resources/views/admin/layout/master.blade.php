<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('asset/css/flowbite.min.css') }}">
    @livewireStyles
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>

</head>

<body class="text-slate-700 flex justify-between">
    <aside class="w-[360px] bg-gray-100 h-screen border border-gray-300 shadow-lg">
        <div class="p-5 font-bold text-xl">
            DASHBOARD ADMIN
        </div>
        <div>
            <a href="#"
                class="block w-full p-2 hover:bg-gray-200 rounded-md font-semibold duration-300 ease-in-out bg-gray-200">Dashboard</a>
            <a href="#"
                class="block w-full p-2 hover:bg-gray-200 rounded-md font-semibold duration-300 ease-in-out">Merk</a>
            <a href="#"
                class="block w-full p-2 hover:bg-gray-200 rounded-md font-semibold duration-300 ease-in-out">Laptop</a>
        </div>
    </aside>
    <main class="w-full">
        <section class="p-5">
            @yield('content')

        </section>
    </main>
    @livewireScripts

    @vite('resources/js/app.js')
    <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
    @yield('script')
</body>

</html>
