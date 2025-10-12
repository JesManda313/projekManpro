@extends('layout.base')
@extends('layout.sidebar')

@section('content1')

<div class="p-4 sm:p-8">

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        
        {{-- TABS NAVIGASI --}}
<div class="flex flex-wrap items-center border-b mb-6 gap-2 sm:gap-4 text-sm sm:text-base">
    <a href="{{ url('/dosen/listMahasiswa') }}" class="ppy-2 px-4 text-gray-500 hover:text-gray-800">List Mahasiswa</a>
    <a href="{{ url('/dosen/addRole') }}" class="py-2 px-4 text-gray-500 hover:text-gray-800">Add Role</a>
    <a href="{{ url('/dosen/addVenue') }}" class="py-2 px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Add Venue</a>
    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="py-2 px-4 text-gray-500 hover:text-gray-800">Add Dosen Penguji</a>
</div>
        {{-- =================================================================
            KONTEN UNTUK HALAMAN "ADD VENUE"
        ================================================================== --}}
        
        {{-- FORM UNTUK ENTRY KELAS --}}
        <div class="mb-8">
            <div class="flex items-end gap-4">
                <div class="flex-grow">
                    <label for="nama_kelas" class="block mb-2 text-sm font-medium text-gray-900">Nama Kelas</label>
                    <input type="text" id="nama_kelas" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="e.g., p.317">
                </div>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2.5 px-6 rounded-lg">Add</button>
            </div>
        </div>

        {{-- TABEL LIST KELAS --}}
        <div class="border-t pt-6">
         
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="text-xs text-gray-800 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3 w-16">No.</th>
                            <th scope="col" class="px-6 py-3">Nama Kelas</th>
                            <th scope="col" class="px-6 py-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Contoh Data Statis --}}
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">1.</td>
                            <td class="px-6 py-4">p.317</td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">2.</td>
                            <td class="px-6 py-4">p.209</td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium">3.</td>
                            <td class="px-6 py-4">p.408</td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection