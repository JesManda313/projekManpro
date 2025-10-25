@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    {{-- Mengurangi padding di mobile (p-4) dan kembali normal di desktop (md:p-8) --}}
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">
        
        {{-- Progress Bar BARU --}}
        <div class="mb-8 md:mb-10">
            <h3 class="font-medium text-gray-600 mb-4">Your Progress</h3>
            
            {{-- Progress bar menggunakan overflow-x-auto agar bisa digeser horizontal --}}
            <div class="overflow-x-auto pb-2"> 
                {{-- min-w-[900px] untuk memastikan semua langkah terlihat dan bisa di-scroll --}}
                <div class="flex items-center min-w-[900px] space-x-0"> 
                    
                    {{-- Step 1: Judul (Selesai) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Judul</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 2: Pilih Dosbing (Selesai) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Pilih Dosbing</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 3: Proposal (Selesai) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Proposal</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 4: Sidang (Selesai) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Sidang</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 5: Final (Aktif) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Final</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 6: Skripsi (Belum) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Skripsi</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 7: Sidang Skripsi (Belum) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Sidang Skripsi</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 8: Final Skripsi (Belum) --}}
                    <div class="flex flex-col items-center flex-shrink-0">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">FInal Skripsi</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Progress Bar BARU --}}

        <div class="pt-4 md:pt-8 mb-16 md:mb-20">
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-xl">

                {{-- Bagian Submit Proposal --}}
                <div class="mb-10 md:mb-12">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Submit Proposal Final</h3>
                    {{-- Di mobile (default) adalah 1 kolom, di md: ke atas menjadi 4 kolom --}}
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                        <label for="document" class="text-lg font-medium text-gray-700 col-span-1">Submit Proposal</label>
                        {{-- Flex menumpuk di mobile dan sejajar di small: ke atas --}}
                        <div class="col-span-1 md:col-span-3 flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                            <select id="document" class="flex-grow p-3 bg-white border border-gray-300 rounded-lg text-gray-600 focus:ring-blue-500 focus:border-blue-500 text-sm md:text-base">
                                <option value="">Pilih dokumen</option>
                                <option value="1">Dokumen Revisi 6 (Final)</option>
                            </select>
                            <button type="submit" class="w-full sm:w-auto px-6 py-3 bg-gray-300 text-gray-800 font-semibold rounded-lg hover:bg-gray-400 transition duration-150 ease-in-out text-sm md:text-base">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection