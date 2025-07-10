    <section class="p-4">
        <div class="mb-5">
            <div class="">
                <label for="product-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Cari Produk</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none z-50">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="product-search" wire:model.live="search"
                        class="block w-full p-2.5 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Cari produk..." />
                </div>
            </div>
            {{-- range harga --}}
            <div>
                <div></div>
            </div>
        </div>

        <!-- Loading Indicator -->
        <div wire:loading.delay>
            <section class="bg-white/80 h-screen w-full fixed z-[100] top-0 left-0 flex justify-center items-center">
                <div class="loader"></div>
            </section>
        </div>
        <div wire:loading.remove>
            <div>
                @if (count($products) > 0)
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($products as $product)
                            <a href="{{ route('product.detail', ['slug' => $product['slug']]) }}"
                                class="w-full border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow">
                                <div class="aspect-square bg-gray-100 overflow-hidden">
                                    <img src="{{ $product['images'][0]['src'] ?? asset('images/placeholder-product.png') }}"
                                        class="w-full h-full object-cover transition-transform duration-300 hover:scale-105"
                                        alt="{{ $product['name'] }}" loading="lazy">
                                </div>
                                <div class="p-3">
                                    <h3 class="font-medium text-sm mb-1">{{ $product['name'] }}</h3>
                                    <div class="flex flex-wrap gap-1 mb-2">
                                        @foreach ($product['categories'] as $cat)
                                            <span
                                                class="text-xs px-2 py-1 bg-gray-100 rounded-full">{{ $cat['name'] }}</span>
                                        @endforeach
                                    </div>
                                    <p class="text-blue-600 font-bold">Rp
                                        {{ number_format($product['price'], 0, ',', '.') }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-8">
                        <p class="text-gray-600">Produk belum tersedia.</p>
                    </div>
                @endif
            </div>
        </div>

        <div class="my-4 flex justify-center gap-3">
            <button wire:click="previousPage"
                class="px-4 py-2 rounded {{ $page <= 1 ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-500 text-white' }}"
                {{ $page <= 1 ? 'disabled' : '' }}>
                Prev
            </button>

            <span class="text-sm self-center text-gray-600">
                Halaman {{ $page }} dari {{ $this->getMaxPage() }}
            </span>

            <button wire:click="nextPage"
                class="px-4 py-2 rounded {{ $page >= $this->getMaxPage() ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-500 text-white' }}"
                {{ $page >= $this->getMaxPage() ? 'disabled' : '' }}>
                Next
            </button>
        </div>

    </section>
