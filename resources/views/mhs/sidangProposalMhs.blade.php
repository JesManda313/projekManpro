@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-8 rounded-xl shadow-lg">
        <div class="mb-10">
            <h3 class="font-medium text-gray-600 mb-4">Your Progress</h3>
            <div class="flex items-center">
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Judul</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Pilih Dosbing</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Proposal</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Final</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">FInal Skripsi</p></div>
            </div>
        </div>
        <div class="pt-8 mb-20">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                {{-- Variabel Simulasi Data Sidang --}}
                @php
                    $tanggalSidang = 'Senin, 10 November 2025';
                    $jamSidang = '10.00';
                @endphp

                <div class="flex flex-col items-center justify-center min-h-[70vh] p-4">
    
                    <h1 class="text-3xl md:text-4xl font-serif font-bold text-gray-800 mb-10">Jadwal Sidang</h1>

                    <div class="w-full max-w-lg bg-gray-100 p-8 md:p-12 rounded-lg shadow-xl relative">
        
                        <div class="text-center space-y-4">
                            <p class="text-2xl md:text-3xl font-semibold text-gray-800">{{ $tanggalSidang }}</p>
                            <p class="text-3xl md:text-4xl font-bold text-gray-900">Pk: {{ $jamSidang }}</p>
                        </div>
        
                        {{-- Bagian Status LULUS --}}
                        {{-- Ganti 'text-right' menjadi 'text-center' agar badge berada di tengah saat memanjang penuh --}}
                        <div class="mt-8 pt-4 border-t border-gray-300 text-center"> 
            
                            {{-- Tambahkan kelas w-full dan hapus inline-block agar badge memenuhi lebar container --}}
                            <span class="block w-full py-2 text-xl text-white font-medium rounded-lg shadow-lg bg-green-600">
                                STATUS
                            </span>
            
                        </div>

                    </div>
                </div>

            </div>
        </div>
                
               
            </div>
        </div>
@endsection