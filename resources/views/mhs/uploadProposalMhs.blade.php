@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    {{-- Mengurangi padding di mobile (p-4) dan kembali normal di desktop (md:p-8) --}}
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">
        
        {{-- Progress Bar --}}
        <div class="mb-8 md:mb-10">
            <h3 class="font-medium text-gray-600 mb-4">Your Progress</h3>
            
            {{-- Progress bar menggunakan overflow-x-auto agar bisa digeser horizontal --}}
            <div class="overflow-x-auto">
                <div class="flex items-center min-w-[900px]"> {{-- Menetapkan lebar minimum agar semua langkah terlihat --}}
                    {{-- Step 1: Judul --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Judul</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 2: Pilih Dosbing --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Pilih Dosbing</p>
                    </div>
                    <div class="flex-auto border-t-2 border-green-500 mx-2 w-10"></div>
                    
                    {{-- Step 3: Proposal (Current) --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm font-medium whitespace-nowrap">Proposal</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 4: Sidang --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Sidang</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 5: Final --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Final</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 6: Skripsi --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Skripsi</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 7: Sidang Skripsi --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">Sidang Skripsi</p>
                    </div>
                    <div class="flex-auto border-t-2 border-gray-300 mx-2 w-10"></div>
                    
                    {{-- Step 8: Final Skripsi --}}
                    <div class="flex flex-col items-center">
                        <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div>
                        <p class="mt-2 text-xs md:text-sm text-gray-500 whitespace-nowrap">FInal Skripsi</p>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Progress Bar --}}

        <div class="pt-4 md:pt-8 mb-16 md:mb-20">
            <div class="bg-white p-4 md:p-8 rounded-lg shadow-xl">

                {{-- Bagian Rincian Proposal (Jurusan) --}}
                <div class="mb-8 md:mb-10">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Jurusan</h3>
                    {{-- Di mobile (default) adalah 1 kolom, di md: ke atas menjadi 4 kolom --}}
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-start">
                        <label class="text-lg font-medium text-gray-700 col-span-1 md:pt-2">Jurusan</label>
                        <div class="col-span-1 md:col-span-3">
                            <textarea class="w-full p-3 bg-gray-100 border border-gray-300 rounded-lg text-gray-800 h-24 resize-none text-sm md:text-base" placeholder="Masukkan Jurusan Anda di sini..."></textarea>
                        </div>
                    </div>
                </div>

                {{-- Bagian Submit Proposal --}}
                <div class="mb-10 md:mb-12">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Submit Proposal</h3>
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

                {{-- Bagian History Proposal --}}
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">History Proposal</h3>
            
                    {{-- Wajib ada overflow-x-auto untuk tabel agar tidak terpotong di layar sempit --}}
                    <div class="overflow-x-auto shadow-md rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Tanggal</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Revisi ke-</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Penjelasan</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">Dokumen</th>
                                    <th scope="col" class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">ACC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 text-xs md:text-sm">
                                @php
                                    $history = [
                                        ['tanggal' => '1 Agustus 2024', 'revisi' => 1, 'penjelasan' => 'kurang rinci di bagian latar belakang', 'dokumen' => 1, 'acc' => 'Dosbing Kabid'],
                                        ['tanggal' => '8 Agustus 2024', 'revisi' => 2, 'penjelasan' => 'sumber kurang terpercaya', 'dokumen' => 2, 'acc' => 'Dosbing Kabid'],
                                        ['tanggal' => '15 Agustus 2024', 'revisi' => 3, 'penjelasan' => 'banyaknya typo', 'dokumen' => 3, 'acc' => 'Dosbing Kabid'],
                                        ['tanggal' => '22 Agustus 2024', 'revisi' => 4, 'penjelasan' => 'dalam analisis kurang jelas', 'dokumen' => 4, 'acc' => 'Dosbing Kabid'],
                                        ['tanggal' => '29 Agustus 2024', 'revisi' => 5, 'penjelasan' => 'metode yang digunakan kurang efisien', 'dokumen' => 5, 'acc' => 'Dosbing Kabid'],
                                    ];
                                @endphp

                                @foreach($history as $item)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap text-gray-500">{{ $item['tanggal'] }}</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap font-medium text-gray-900">{{ $item['revisi'] }}</td>
                                        {{-- max-w-xs dan menghilangkan whitespace-nowrap agar teks penjelasan bisa wrap --}}
                                        <td class="px-4 md:px-6 py-4 text-gray-500 max-w-[200px] sm:max-w-xs">{{ $item['penjelasan'] }}</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap text-blue-600 hover:text-blue-800 cursor-pointer">{{ $item['dokumen'] }}</td>
                                        <td class="px-4 md:px-6 py-4 whitespace-nowrap text-gray-800 font-semibold">{{ $item['acc'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection