@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')

<div class="p-4 sm:p-8">

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        
        {{-- TABS NAVIGASI (DIPERBAIKI) --}}
        <div class="w-full border-b border-gray-200 mb-6">
            <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
                <nav class="flex text-sm sm:text-base space-x-1">
                    <a href="{{ url('/dosen/listMahasiswa') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">List Mahasiswa</a>
                    <!-- <a href="{{ url('/dosen/addRole') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Role</a> -->
                    <a href="{{ url('/dosen/addVenue') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Venue</a>
                    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Add Dosen Penguji</a>
                </nav>
            </div>
        </div>

        {{-- =================================================================
            AREA KONTEN UNTUK FITUR "PILIH DOSEN PENGUJI"
        ================================================================== --}}
        <div class="bg-gray-50 border border-dashed border-gray-300 rounded-lg p-16 text-center text-gray-500 min-h-[400px] flex items-center justify-center">
            <div>
                <h2 class="text-xl font-semibold mb-2">Area Dosen Penguji</h2>
                <p>Konten untuk memilih dan mengelola dosen penguji akan ditampilkan di sini.</p>
            </div>
        </div>
        
    </div>
</div>

@endsection