@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')

<div class="p-4 sm:p-8">

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        {{-- TABS NAVIGASI (DIPERBAIKI) --}}
        <div class="w-full border-b border-gray-200 mb-6">
            <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
                <nav class="flex text-sm sm:text-base space-x-1">
                    <a href="{{ url('/dosen/listMahasiswa') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">List Mahasiswa</a>
                    <!-- <a href="{{ url('/dosen/addRole') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Role</a> -->
                    <a href="{{ url('/dosen/addVenue') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Venue</a>
                    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Dosen Penguji</a>
                </nav>
            </div>
        </div>

        {{-- FILTERS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Search Nama</option>
            </select>
            <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Search Judul</option>
            </select>
            <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option selected>Select Status</option>
            </select>
        </div>

        {{-- TABEL DATA MAHASISWA --}}
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs text-gray-800 uppercase bg-gray-100">
                    <tr>
                        <th scope="col" class="px-6 py-3">NRP</th>
                        <th scope="col" class="px-6 py-3">Nama Mahasiswa</th>
                        <th scope="col" class="px-6 py-3">Judul Proposal</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- =================================================================
                        KODE BARIS DATA LENGKAP DIMULAI DI SINI
                    ================================================================== --}}
                    
                    {{-- Baris 1: Natasya --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Natasya</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Title Submitted</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Accepted</span>
                        </td>
                    </tr>
                    
                    {{-- Baris 2: Lindawati --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Lindawati</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Title Submitted</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Declined</span>
                        </td>
                    </tr>
                    
                    {{-- Baris 3: Yemima --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Yemima</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Proposal Done</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Waiting</span>
                        </td>
                    </tr>
                    
                    {{-- Baris 4: Jesman --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Jesman</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Proposal Done</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">Scheduled</span>
                        </td>
                    </tr>
                    
                    {{-- Baris 5: Willson (Sudah dilengkapi) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Willson</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Thesis</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Accepted</span>
                        </td>
                    </tr>

                    {{-- Baris 6: Terry (Thesis) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Terry</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Thesis</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Declined</span>
                        </td>
                    </tr>

                    {{-- Baris 7: Budi (Thesis) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Budi</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Thesis</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">Waiting Final</span>
                        </td>
                    </tr>

                    {{-- Baris 8: Terry (Sempro) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Terry</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Sempro</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">Declined</span>
                        </td>
                    </tr>

                    {{-- Baris 9: Budi (Sempro) --}}
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">c14230151</td>
                        <td class="px-6 py-4">Budi</td>
                        <td class="px-6 py-4">Machine Learning Prediksi Cuaca</td>
                        <td class="px-6 py-4">Sempro</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">Done</span>
                        </td>
                    </tr>
                    
                    {{-- =================================================================
                        KODE BARIS DATA LENGKAP BERAKHIR DI SINI
                    ================================================================== --}}
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection