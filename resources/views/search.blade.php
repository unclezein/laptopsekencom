@extends('layout.master')
@section('menu-search')
    text-blue-800
@endsection
@section('content')
    <div class="grid grid-cols-2 gap-3 mb-5">
        <div class="">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required />
            </div>
        </div>
        <div>
            <select id="countries"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Laptop</option>
                <option value="ASUS">ASUS</option>
                <option value="LENOVO">LENOVO</option>
                <option value="HP">HP</option>
                <option value="ACER">ACER</option>
                <option value="MACBOOK">MACBOOK</option>
            </select>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-3">
        <div class="border border-gray-300 rounded-lg h-full">
            <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:640/plain/https://storage.googleapis.com/takeapp/media/cmam1cram000004jpfjl17d7q.png"
                class="w-full object-cover h-[150px] rounded-lg" alt="">
            <div class="p-2">
                <h2 class="text-[14px] font-semibold mb-2">LENOVO Ideapad Flex 5 | AMD Ryzen 3 | RAM 8 GB | SSD 512 GB |
                    Layar 14” Touchscreen Flip
                    360° | Slim & Ringan, Cocok Buat Mobilitas Tinggi!</h2>
                <p class="text-[14px]">Rp 5.300.000</p>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg h-full">
            <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:640/plain/https://storage.googleapis.com/takeapp/media/cmam1cram000004jpfjl17d7q.png"
                class="w-full object-cover h-[150px] rounded-lg" alt="">
            <div class="p-2">
                <h2 class="text-[14px] font-semibold mb-2">LENOVO Ideapad Flex 5 | AMD Ryzen 3 | RAM 8 GB | SSD 512 GB |
                    Layar 14” Touchscreen Flip
                    360° | Slim & Ringan, Cocok Buat Mobilitas Tinggi!</h2>
                <p class="text-[14px]">Rp 5.300.000</p>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg h-full">
            <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:640/plain/https://storage.googleapis.com/takeapp/media/cmam1cram000004jpfjl17d7q.png"
                class="w-full object-cover h-[150px] rounded-lg" alt="">
            <div class="p-2">
                <h2 class="text-[14px] font-semibold mb-2">LENOVO Ideapad Flex 5 | AMD Ryzen 3 | RAM 8 GB | SSD 512 GB |
                    Layar 14” Touchscreen Flip
                    360° | Slim & Ringan, Cocok Buat Mobilitas Tinggi!</h2>
                <p class="text-[14px]">Rp 5.300.000</p>
            </div>
        </div>
        <div class="border border-gray-300 rounded-lg h-full">
            <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:640/plain/https://storage.googleapis.com/takeapp/media/cmam1cram000004jpfjl17d7q.png"
                class="w-full object-cover h-[150px] rounded-lg" alt="">
            <div class="p-2">
                <h2 class="text-[14px] font-semibold mb-2">HP 14s | INTEL CORE i5 GEN 12 | RAM 8GB | SSD 512GB | 14” FHD |
                    GARANSI RESMI</h2>
                <p class="text-[14px]">Rp 5.300.000</p>
            </div>
        </div>
    </div>
@endsection
