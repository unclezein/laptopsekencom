<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HP 14s | INTEL CORE i5 GEN 12 | RAM 8GB | SSD 512GB | 14” FHD | GARANSI RESMI</title>
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
    <main class="max-w-5xl w-full mx-auto grid lg:grid-cols-2">
        <section class="p-10">
            <a href="#" class="mb-5 block">Back</a>
            <div class="flex justify-center rounded-xl items-center bg-gray-100">
                <div class="relative w-full overflow-hidden">
                    <!-- Carousel Container -->
                    <div class="relative h-[400px] w-full">
                        <!-- Images -->
                        <div id="carousel" class="flex h-full transition-transform duration-500 ease-in-out">
                            <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:1080/plain/https://storage.googleapis.com/takeapp/media/cmagxzcte000204la8l0s5zh6.jpeg"
                                alt="Image 1" class="w-full h-full object-contain flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                                alt="Image 2" class="w-full h-full object-contain flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1682695796954-bad0d0f59ff1?q=80&w=2070&auto=format&fit=crop"
                                alt="Image 3" class="w-full h-full object-contain flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                                alt="Image 4" class="w-full h-full object-contain flex-shrink-0">
                            <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                                alt="Image 4" class="w-full h-full object-contain flex-shrink-0">
                        </div>

                        <!-- Navigation Buttons -->
                        <button id="prevBtn"
                            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/80 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button id="nextBtn"
                            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/80 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Indicators -->
            <div id="indicators" class="grid grid-cols-5 gap-2 mt-4">
                <img src="https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:1080/plain/https://storage.googleapis.com/takeapp/media/cmagxzcte000204la8l0s5zh6.jpeg"
                    data-index="0"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100">
                <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                    data-index="1"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100">
                <img src="https://images.unsplash.com/photo-1682695796954-bad0d0f59ff1?q=80&w=2070&auto=format&fit=crop"
                    data-index="2"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100">
                <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                    data-index="3"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100">
                <img src="https://images.unsplash.com/photo-1682686580391-615b4b715bd4?q=80&w=2070&auto=format&fit=crop"
                    data-index="4"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100">
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const carousel = document.getElementById('carousel');
                    const prevBtn = document.getElementById('prevBtn');
                    const nextBtn = document.getElementById('nextBtn');
                    const thumbnails = document.querySelectorAll('.indicator-thumb');
                    const images = carousel.querySelectorAll('img');

                    const imageCount = images.length;
                    let currentIndex = 0;

                    function updateCarousel() {
                        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

                        thumbnails.forEach((thumb, index) => {
                            thumb.classList.remove('border-blue-500', 'opacity-100');
                            thumb.classList.add('opacity-60', 'border-transparent');
                            if (index === currentIndex) {
                                thumb.classList.add('border-blue-500', 'opacity-100');
                                thumb.classList.remove('opacity-60');
                            }
                        });
                    }

                    function goToSlide(index) {
                        if (index < 0) index = imageCount - 1;
                        if (index >= imageCount) index = 0;
                        currentIndex = index;
                        updateCarousel();
                    }

                    thumbnails.forEach(thumb => {
                        thumb.addEventListener('click', function() {
                            const index = parseInt(this.getAttribute('data-index'));
                            goToSlide(index);
                        });
                    });

                    prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
                    nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));

                    updateCarousel();
                });
            </script>

        </section>
        <section class="p-10">
            <div class="mb-5">
                <h1 class="font-bold text-xl">
                    HP 14s | INTEL CORE i5 GEN 12 | RAM 8GB | SSD 512GB | 14” FHD | GARANSI RESMI
                </h1>
                <p class="text-slate-500">
                    ✅ UNIT READY YA HP 14s | INTEL CORE i5 GEN 12 | RAM 8GB | SSD 512GB | 14” FHD | GARANSI RESMI
                </p>
                <p class="text-slate-500">...</p>
            </div>
            <div class="flex border-b border-gray-300 justify-between items-center gap-5 mb-5">
                <p class="font-semibold">Price</p>
                <p class="font-semibold">Rp 2.000.000</p>
            </div>
            <div class="flex pb-5 border-b border-gray-300 justify-between items-center gap-5 mb-5">
                <p class="font-semibold">Jumlah</p>
                <div class="relative flex items-center max-w-[8rem] border border-gray-300 rounded-lg overflow-hidden">
                    <button type="button" id="decrement-button" data-input-counter-decrement="quantity-input"
                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 hover:bg-gray-200  p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" id="quantity-input" data-input-counter
                        aria-describedby="helper-text-explanation"
                        class="bg-gray-50  h-11 text-center text-gray-900 text-sm focus:ring-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 outline-none border-none"
                        placeholder="1" required />
                    <button type="button" id="increment-button" data-input-counter-increment="quantity-input"
                        class="bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 hover:bg-gray-200  p-3 h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                        <svg class="w-3 h-3 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-4 rounded-lg duration-300 transition-all ">Kirim</button>
        </section>
    </main>

    @livewireScripts
    @vite('resources/js/app.js')
    <script src="{{ asset('asset/js/flowbite.min.js') }}"></script>
</body>

</html>
