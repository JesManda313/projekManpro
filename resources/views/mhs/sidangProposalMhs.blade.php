@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    {{-- Mengurangi padding di mobile (p-4) dan kembali normal di desktop (md:p-8) --}}
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">
        
        {{-- Progress Bar (Disertai scroll horizontal untuk mobile) --}}
        <div class="mb-8 md:mb-10">
            <h3 class="font-medium text-gray-600 mb-4 text-base md:text-lg">Your Progress</h3>
            
            {{-- Container wajib ada overflow-x-auto untuk menggeser bar secara horizontal --}}
            <div class="overflow-x-auto pb-2"> 
                {{-- min-w-[950px] agar semua langkah terlihat dan bisa di-scroll --}}
                <div class="flex items-center min-w-[950px] space-x-0"> 
                    
                    {{-- Langkah-langkah dengan teks kecil (text-xs) dan ikon kecil (w-7 h-7) --}}
                    
                    {{-- Steps 1-3 (Selesai) --}}
                    @foreach (['Judul', 'Pilih Dosbing', 'Proposal'] as $step)
                        <div class="flex flex-col items-center flex-shrink-0">
                            <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">{{ $step }}</p>
                        </div>
                        <div class="flex-auto border-t-2 border-green-500 mx-2 w-8"></div>
                    @endforeach

                    {{-- Step 4: Sidang (Aktif) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Sidang</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-8"></div>
                    
                    {{-- Steps 5-9 (Belum Selesai) --}}
                    @foreach (['Final', 'Skripsi', 'Sidang Skripsi', 'FInal Skripsi'] as $step)
                        <div class="flex flex-col items-center flex-shrink-0">
                            <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                            <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">{{ $step }}</p>
                        </div>
                        @if (!$loop->last)
                            <div class="flex-auto border-t-2 border-gray-300 mx-2 w-8"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        {{-- End Progress Bar --}}

        <div class="pt-4 md:pt-8 mb-16 md:mb-20">
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-xl">
                {{-- Variabel Simulasi Data Sidang --}}
                @php
                    $tanggalSidang = 'Senin, 10 November 2025';
                    $jamSidang = '10.00';
                @endphp

                {{-- Kontainer Sidang --}}
                <div class="flex flex-col items-center justify-center min-h-[50vh] p-0 md:p-4">
    
                    <h1 class="text-2xl md:text-4xl font-serif font-bold text-gray-800 mb-8 md:mb-10 text-center">Jadwal Sidang</h1>

                    <div class="w-full max-w-sm sm:max-w-lg bg-gray-100 p-6 md:p-10 rounded-lg shadow-xl relative">
        
                        <div class="text-center space-y-3 md:space-y-4">
                            <p class="text-xl md:text-3xl font-semibold text-gray-800">{{ $tanggalSidang }}</p>
                            <p class="text-2xl md:text-4xl font-bold text-gray-900">Pk: {{ $jamSidang }}</p>
                        </div>
        
                        {{-- Bagian Status LULUS --}}
                        <div class="mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-300 text-center"> 
            
                            {{-- Badge status menggunakan w-full di mobile dan padding vertikal disesuaikan --}}
                            <span class="block w-full py-2 text-lg md:text-xl text-white font-medium rounded-lg shadow-lg bg-green-600">
                                STATUS
                            </span>
            
                        </div>

                    </div>
                </div>

            </div>
        </div>
@endsection