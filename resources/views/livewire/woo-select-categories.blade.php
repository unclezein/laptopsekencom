<div>
    <select wire:model="selectedCategory"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
        <option value="">Pilih Kategori</option>
        @foreach ($categories as $cat)
            <option value="{{ $cat['id'] }}">{{ $cat['name'] }}</option>
        @endforeach
    </select>
</div>
