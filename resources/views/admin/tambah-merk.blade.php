@extends('admin.layout.master')
@section('content')
    <div class="p-5 border border-gray-300 rounded-lg mb-5">
        <div class=" mb-5">
            <h2 class="text-2xl font-bold">Tambah Laptop</h2>
        </div>
        <form action="{{ route('admin.store-merk') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-6">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Merk</label>
                <input type="text" id="merk" name="merk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="merk" required>
                <p class="text-red-500 text-xs mt-1"> {{ $errors->first('merk') }}</p>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah</button>
        </form>
    </div>
@endsection
@section('script')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session()->get('success') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session()->get('error') }}',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
