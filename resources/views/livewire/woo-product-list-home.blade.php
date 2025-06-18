<section>
    <div>
        @forelse ($products as $product)
            <a href="{{ route('product.detail', $product['slug']) }}"
                class="block w-full border border-gray-300 rounded-xl hover:shadow-lg duration-300 ease-in-out p-4 cursor-pointer mb-5">
                <div class="flex justify-between items-center lg:items-start gap-5">
                    <div class="w-[80%]  ">
                        <h2 class="text-[18px] font-bold">
                            {{ $product['categories'][0]['name'] }}
                        </h2>
                        <p class="font-semibold text-[13px]">
                            {{ $product['name'] }}
                        </p>
                        <style>
                            .description-wrapper p {
                                @apply text-slate-700 text-sm;
                            }
                        </style>
                        <div class="text-slate-500 text-[13px] description-wrapper line-clamp-2">
                            {!! $product['short_description'] ?: $product['description'] !!}
                        </div>
                        <p class="text-blue-600 font-bold">Rp
                            {{ number_format($product['price'], 0, ',', '.') }}</p>
                    </div>
                    <img src="{{ $product['images'][0]['src'] ?? '' }}" alt="{{ $product['name'] }}"
                        class="w-28 h-28 rounded-lg object-fit object-center" loading="lazy">
                </div>
            </a>
        @empty
        @endforelse
        <div wire:loading.delay>
            <section class="bg-white/80 h-screen w-full fixed z-[100] top-0 left-0 flex justify-center items-center">
                <div class="loader"></div>
            </section>
        </div>
        <div wire:loading.remove>
            <div>
                @if (count($products) > 0)
                    @foreach ($products as $product)
                        <a href="{{ route('product.detail', $product['slug']) }}"
                            class="block w-full border border-gray-300 rounded-xl hover:shadow-lg duration-300 ease-in-out p-4 cursor-pointer mb-5">
                            <div class="flex justify-between items-center lg:items-start gap-5">
                                <div class="w-[80%]  ">
                                    <h2 class="text-[18px] font-bold">
                                        {{ $product['categories'][0]['name'] }}
                                    </h2>
                                    <p class="font-semibold text-[13px]">
                                        {{ $product['name'] }}
                                    </p>
                                    <style>
                                        .description-wrapper p {
                                            @apply text-slate-700 text-sm;
                                        }
                                    </style>
                                    <div class="text-slate-500 text-[13px] description-wrapper line-clamp-2">
                                        {!! $product['short_description'] ?: $product['description'] !!}
                                    </div>
                                    <p class="text-blue-600 font-bold">Rp
                                        {{ number_format($product['price'], 0, ',', '.') }}</p>
                                </div>
                                <img src="{{ $product['images'][0]['src'] ?? '' }}" alt="{{ $product['name'] }}"
                                    class="w-28 h-28 rounded-lg object-fit object-center" loading="lazy">
                            </div>
                        </a>
                    @endforeach
                @else
                    <div class="text-center py-8">
                        <p class="text-gray-600">Produk tidak ditemukan.</p>
                    </div>
                @endif
            </div>
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
