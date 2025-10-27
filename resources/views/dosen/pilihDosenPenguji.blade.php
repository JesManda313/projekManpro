@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')

<div class="p-4 sm:p-8">
    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        <div class="w-full border-b border-gray-200 mb-6">
            <div class="overflow-x-auto whitespace-nowrap no-scrollbar">
                <nav class="flex text-sm sm:text-base space-x-1">
                    <a href="{{ url('/dosen/listMahasiswa') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800 transition-colors">
                        List Mahasiswa
                    </a>
                    <a href="{{ url('/dosen/addVenue') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800 transition-colors">
                        Add Venue
                    </a>
                    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">
                        Add Dosen Penguji
                    </a>
                </nav>
            </div>
        </div>

        <div class="bg-gray-50 border border-dashed border-gray-300 rounded-2xl p-6 sm:p-10 text-gray-600 min-h-[300px] flex items-center justify-center text-center">
            <div class="max-w-lg">
                <h2 class="text-lg sm:text-xl font-semibold text-gray-500 mb-3">
                    Area Dosen Penguji
                </h2>
                <p class="text-sm sm:text-base text-gray-500 leading-relaxed">
                    Konten untuk memilih dan mengelola dosen penguji akan ditampilkan di sini. Pastikan dosen yang dipilih sesuai dengan bidang keahliannya.
                </p>
            </div>
        </div>

    </div>
</div>

@endsection
