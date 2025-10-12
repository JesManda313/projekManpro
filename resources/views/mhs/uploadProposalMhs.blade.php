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
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div><p class="mt-2 text-sm font-medium">Proposal</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang</p></div>
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

                {{-- Bagian Rincian Proposal --}}
                <div class="mb-10">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Jurusan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-start">
                        <label class="text-lg font-medium text-gray-700 col-span-1 pt-2">Jurusan</label>
                        <div class="col-span-3">
                            <textarea class="w-full p-3 bg-gray-100 border border-gray-300 rounded-lg text-gray-800 h-24 resize-none" placeholder="Masukkan Jurusan Anda di sini..."></textarea>
                        </div>
                    </div>
                </div>
                {{-- Bagian Submit Proposal --}}
                <div class="mb-12">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Submit Proposal</h3>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
                        <label for="document" class="text-lg font-medium text-gray-700 col-span-1">Submit Proposal</label>
                        <div class="col-span-3 flex space-x-4">
                            <select id="document" class="flex-grow p-3 bg-white border border-gray-300 rounded-lg text-gray-600 focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih dokumen</option>
                                {{-- Tambahkan opsi dokumen dinamis di sini --}}
                                <option value="1">Dokumen Revisi 6 (Final)</option>
                            </select>
                            <button type="submit" class="px-8 py-3 bg-gray-300 text-gray-800 font-semibold rounded-lg hover:bg-gray-400 transition duration-150 ease-in-out">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Bagian History Proposal --}}
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">History Proposal</h3>
            
                    <div class="overflow-x-auto shadow-md rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Revisi ke-</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Penjelasan</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dokumen</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ACC</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                {{-- Baris Data Riwayat (Looping) --}}
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
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item['tanggal'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item['revisi'] }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-500">{{ $item['penjelasan'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-600 hover:text-blue-800 cursor-pointer">{{ $item['dokumen'] }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 font-semibold">{{ $item['acc'] }}</td>
                                    </tr>
                                @endforeach
                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection