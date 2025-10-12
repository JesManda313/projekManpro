{{-- Menggunakan layout utama dari proyek Anda --}}
@extends('layout.base')
@extends('layout.sidebar')

{{-- Memulai bagian konten yang akan diisi --}}
@section('content1')

<div class="p-4 sm:p-8">

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        
        {{-- TABS NAVIGASI --}}
<div class="flex flex-wrap items-center border-b mb-6 gap-2 sm:gap-4 text-sm sm:text-base">
    <a href="{{ url('/dosen/listMahasiswa') }}" class="py-2 px-4 text-gray-500 hover:text-gray-800">List Mahasiswa</a>
    <a href="{{ url('/dosen/addRole') }}" class="py-2 px-4 text-gray-500 hover:text-gray-800">Add Role</a>
    <a href="{{ url('/dosen/addVenue') }}" class="py-2 px-4 text-gray-500 hover:text-gray-800">Add Venue</a>
    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="py-2 px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Add Dosen Penguji</a>
</div>

        {{-- =================================================================
            AREA KONTEN UNTUK FITUR "PILIH DOSEN PENGUJI"
            Saat ini kosong sesuai desain, siap untuk diisi.
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