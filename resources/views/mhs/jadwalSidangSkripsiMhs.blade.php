@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
<div class="bg-white bg-opacity-70 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-5xl mx-auto">

    <div class="mb-10 overflow-x-auto">
        <h3 class="font-semibold text-gray-800 mb-4">Your Progress</h3>
        <div class="flex items-center min-w-max">
            {{-- Steps 1-6 (Selesai) --}}
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Judul</p></div>
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Pilih Dosbing</p></div>
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Proposal</p></div>
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Sidang</p></div>
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Final</p></div>
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Skripsi</p></div>
            <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
            
            {{-- Step 7 (Aktif) --}}
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-black border-2 border-black rounded-full z-10"></div><p class="mt-2 text-xs sm:text-sm font-semibold text-gray-800">Sidang Skripsi</p></div>
            <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
            
            {{-- Step 8 (Belum) --}}
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-white border-2 border-gray-300 rounded-full z-10"></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Final</p></div>
        </div>
    </div>
    
    <div class="bg-gray-100 p-6 sm:p-10 rounded-lg border border-gray-200">
        
        {{-- Title --}}
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">
            Jadwal Sidang Skripsi
        </h2>
        
        {{-- Schedule Box --}}
        <div class="bg-white shadow-md rounded-lg max-w-lg mx-auto p-6 text-center">
            <p class="text-2xl font-semibold text-gray-700">
                Senin, 10 November 2025
            </p>
            <p class="text-xl text-gray-600 mt-2">
                Pk: 10.00
            </p>
        </div>
        
        {{-- Done Button --}}
        <div class="flex justify-end mt-10">
            <button class="px-10 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition-colors duration-200">
                Done
            </button>
        </div>

    </div>
    
</div>
@endsection