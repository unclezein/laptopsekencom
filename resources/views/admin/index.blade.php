@extends('admin.layout.master')
@section('content')
    <div class="p-5 border border-gray-300 rounded-lg mb-5">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-2xl font-bold">Data Laptop</h2>
            <a href="#" class="bg-blue-500 text-white py-2 px-5 rounded-lg">Tambah</a>
        </div>
        <div class="relative overflow-x-auto w-full">
            <table id="productTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merk
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                            APPLE
                        </td>
                        <td class="px-6 py-4">
                            Rp. 5.000.000
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <form action="" method="post"> <button type="submit"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="p-5 border border-gray-300 rounded-lg">
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-2xl font-bold">Data Merk</h2>
            <a href="{{ route('admin.tambah-merk') }}" class="bg-blue-500 text-white py-2 px-5 rounded-lg">Tambah</a>
        </div>
        <div class="relative overflow-x-auto w-full">
            <table id="merkTable" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($merks as $merk)
                        <tr class="bg-white border-b border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $merk->merk }}
                            </th>
                            <td class="px-6 py-4 flex gap-2">
                                <a href=""
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form action="" method="post"> <button type="submit"
                                        class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
            $('#merkTable').DataTable();
        });
    </script>
@endsection
