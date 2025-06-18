<main class="max-w-5xl w-full mx-auto grid lg:grid-cols-2">
    <section class="p-10">
        <a href="{{ route('home') }}"
            class="mb-5 inline-block p-2 rounded-lg text-gray-500 hover:bg-gray-200 duration-300 ease-in-out">Back</a>

        <!-- Carousel -->
        <div class="flex justify-center rounded-xl items-center bg-gray-100">
            <div class="relative w-full overflow-hidden">
                <div class="relative h-[400px] w-full">
                    <div id="carousel" class="flex h-full transition-transform duration-500 ease-in-out">
                        @foreach ($product['images'] as $img)
                            <div class="w-full h-full object-contain flex-shrink-0 relative">
                                <img src="{{ $img['src'] }}" alt="{{ $img['name'] ?? '' }}"
                                    class="w-full h-full object-contain flex-shrink-0" loading="lazy" />

                                <!-- Tombol download -->
                                <a href="{{ url('/download-image?url=' . urlencode($img['src'])) }}" target="_blank"
                                    rel="noopener noreferrer" download onclick="showLoader()"
                                    class="p-3 absolute bottom-0.5 left-0.5 bg-gray-300 rounded-full fill-slate-900 hover:fill-blue-700 duration-300 ease-in-out"
                                    aria-label="Download">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 " viewBox="0 0 512 512">
                                        <path
                                            d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 242.7-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7 288 32zM64 352c-35.3 0-64 28.7-64 64l0 32c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-32c0-35.3-28.7-64-64-64l-101.5 0-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352 64 352zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                                    </svg>
                                </a>
                            </div>
                        @endforeach
                        <script>
                            function showLoader() {
                                const loader = document.getElementById('global-loader');
                                if (loader) loader.classList.remove('hidden');

                                // Sembunyikan loader setelah beberapa detik (fallback)
                                setTimeout(() => loader.classList.add('hidden'), 1000);
                            }
                        </script>
                    </div>

                    <!-- Navigation Buttons -->
                    <button id="prevBtn"
                        class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/80 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn"
                        class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/50 hover:bg-white/80 text-gray-800 rounded-full w-10 h-10 flex items-center justify-center transition-all duration-300 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Thumbnails -->
        <div id="indicators" class="grid grid-cols-5 gap-2 mt-4">
            @foreach ($product['images'] as $index => $img)
                <img src="{{ $img['src'] }}" data-index="{{ $index }}" alt="{{ $img['name'] ?? '' }}"
                    loading="lazy"
                    class="indicator-thumb w-full h-[100px] object-cover object-center cursor-pointer opacity-60 border-2 border-transparent hover:opacity-100" />
            @endforeach
        </div>

        <!-- Carousel Script -->
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
                    currentIndex = index < 0 ? imageCount - 1 : index >= imageCount ? 0 : index;
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
        <p class="font-semibold text-xl mt-5">Bagikan :</p>
        <div class="flex gap-2 mt-4">
            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode($url) }}" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                </svg>
            </a>
            <a href="https://wa.me/?text={{ urlencode($title . ' - ' . $url) }}" target="_blank"
                rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M92.1 254.6c0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6L152 365.2l4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8c0-35.2-15.2-68.3-40.1-93.2c-25-25-58-38.7-93.2-38.7c-72.7 0-131.8 59.1-131.9 131.8zM274.8 330c-12.6 1.9-22.4 .9-47.5-9.9c-36.8-15.9-61.8-51.5-66.9-58.7c-.4-.6-.7-.9-.8-1.1c-2-2.6-16.2-21.5-16.2-41c0-18.4 9-27.9 13.2-32.3c.3-.3 .5-.5 .7-.8c3.6-4 7.9-5 10.6-5c2.6 0 5.3 0 7.6 .1c.3 0 .5 0 .8 0c2.3 0 5.2 0 8.1 6.8c1.2 2.9 3 7.3 4.9 11.8c3.3 8 6.7 16.3 7.3 17.6c1 2 1.7 4.3 .3 6.9c-3.4 6.8-6.9 10.4-9.3 13c-3.1 3.2-4.5 4.7-2.3 8.6c15.3 26.3 30.6 35.4 53.9 47.1c4 2 6.3 1.7 8.6-1c2.3-2.6 9.9-11.6 12.5-15.5c2.6-4 5.3-3.3 8.9-2s23.1 10.9 27.1 12.9c.8 .4 1.5 .7 2.1 1c2.8 1.4 4.7 2.3 5.5 3.6c.9 1.9 .9 9.9-2.4 19.1c-3.3 9.3-19.1 17.7-26.7 18.8zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM148.1 393.9L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5c29.9 30 47.9 69.8 47.9 112.2c0 87.4-72.7 158.5-160.1 158.5c-26.6 0-52.7-6.7-75.8-19.3z" />
                </svg>
            </a>
            <a href="https://twitter.com/intent/tweet?url={{ urlencode($url) }}&text={{ urlencode($title) }}"
                target="_blank" rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-8 fill-gray-600 hover:fill-blue-800 duration-200 ease-in-out"
                    viewBox="0 0 448 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.-->
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z" />
                </svg>
            </a>

        </div>

    </section>

    <!-- Product Info -->
    <section class="p-10">
        <div class="mb-5">
            <h1 class="font-bold text-xl">
                {{ $product['name'] }}
            </h1>
            <div class="text-slate-500 prose prose-slate max-w-none">
                <div class="flex justify-end">
                    <button onclick="copyDescription()"
                        class="p-2 bg-gray-200 rounded-md fill-gray-800 hover:fill-gray-500 duration-200 ease-in-out"><svg
                            class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M208 0L332.1 0c12.7 0 24.9 5.1 33.9 14.1l67.9 67.9c9 9 14.1 21.2 14.1 33.9L448 336c0 26.5-21.5 48-48 48l-192 0c-26.5 0-48-21.5-48-48l0-288c0-26.5 21.5-48 48-48zM48 128l80 0 0 64-64 0 0 256 192 0 0-32 64 0 0 48c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 176c0-26.5 21.5-48 48-48z" />
                        </svg></button>
                </div>
                <div id="product-description">
                    {!! $product['description'] !!}
                </div>
                <script>
                    function copyDescription() {
                        const container = document.getElementById("product-description");
                        const temp = document.createElement("textarea");
                        temp.value = container.innerText;
                        document.body.appendChild(temp);
                        temp.select();
                        try {
                            document.execCommand("copy");
                            alert("Deskripsi berhasil disalin.");
                        } catch (err) {
                            alert("Gagal menyalin deskripsi.");
                        }
                        document.body.removeChild(temp);
                    }
                </script>

            </div>
        </div>
        <div class="flex border-b border-gray-300 justify-between items-center gap-5 mb-5">
            <p class="font-semibold">Price</p>
            <p class="font-semibold text-blue-600">Rp {{ number_format($product['price']) }}</p>
        </div>
        <a href="https://wa.me/6281273979750?text={{ urlencode('Halo saya tertarik dengan produk: ' . $product['name'] . ' - ' . request()->url()) }}"
            target="_blank" rel="noopener noreferrer"
            class="block text-center cursor-pointer bg-slate-900 hover:bg-slate-700 w-full text-white font-bold py-4 rounded-lg duration-300 transition-all">
            Pesan
        </a>

    </section>
    <script>
        function downloadImage(url, filename) {
            fetch(url)
                .then(response => response.blob())
                .then(blob => {
                    const blobUrl = URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = blobUrl;
                    a.download = filename || 'image.jpg';
                    document.body.appendChild(a);
                    a.click();
                    document.body.removeChild(a);
                    URL.revokeObjectURL(blobUrl);
                })
                .catch(error => {
                    console.error('Download error:', error);
                    alert('Gagal mengunduh gambar.');
                });
        }
    </script>


</main>
