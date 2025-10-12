@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
<div class="bg-white bg-opacity-70 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-5xl mx-auto">

    <div class="mb-10 overflow-x-auto">
        <h3 class="font-semibold text-gray-800 mb-4">Your Progress</h3>
        <div class="flex items-center min-w-max">
            {{-- Steps 1-7 (Selesai) --}}
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
            <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-xs sm:text-sm text-gray-500">Sidang Skripsi</p></div>
            <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
            
            {{-- Step 8 (Aktif) --}}
            <div class="flex flex-col items-center"><div class="w-8 h-8 bg-black border-2 border-black rounded-full z-10"></div><p class="mt-2 text-xs sm:text-sm font-semibold text-gray-800">Final</p></div>
        </div>
    </div>
    
    <div class="bg-gray-100 p-6 sm:p-10 rounded-lg border border-gray-200 flex flex-col min-h-[350px]">
        
        {{-- Form Area --}}
        <div class="flex-grow">
            <div class="max-w-xl mx-auto">
                <label for="file_input" class="block mb-2 text-sm font-medium text-gray-700">Submit Skripsi FINAL</label>
                <div class="flex items-center">
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-l-lg cursor-pointer bg-white focus:outline-none file:mr-4 file:py-2.5 file:px-4 file:border-0 file:text-sm file:font-semibold" placeholder="Pilih dokumen" id="file_input" type="file">
                    <button type="submit" class="px-8 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-r-lg hover:bg-gray-300 border-l border-gray-300">Submit</button>
                </div>
            </div>
        </div>
        
        {{-- Next Button --}}
        <div class="flex justify-end">
            <button class="px-10 py-2 bg-gray-300 text-gray-700 font-semibold rounded-lg hover:bg-gray-400 transition-colors duration-200">
                Next
            </button>
        </div>

    </div>
    
</div>
@endsection