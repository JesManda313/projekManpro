@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    <div class="bg-white bg-opacity-70 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-5xl mx-auto">

        {{-- Progress Bar (disesuaikan dengan gaya baru, tanpa loop) --}}
        <div class="mb-10 overflow-x-auto">
            <h3 class="font-semibold text-gray-800 mb-4">Your Progress</h3>
            <div class="flex items-center min-w-max">
                {{-- Step 1-5 (Selesai) --}}
                <div class="flex flex-col items-center">
                    <div
                        class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Judul</p>
                </div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center">
                    <div
                        class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Pilih Dosbing</p>
                </div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center">
                    <div
                        class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Proposal</p>
                </div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center">
                    <div
                        class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Sidang</p>
                </div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center">
                    <div
                        class="w-8 h-8 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Final</p>
                </div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>

                {{-- Step 6 (Aktif) --}}
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 bg-black border-2 border-black rounded-full z-10"></div>
                    <p class="mt-2 text-xs sm:text-sm font-semibold text-gray-800">Skripsi</p>
                </div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>

                {{-- Step 7-8 (Belum) --}}
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 bg-white border-2 border-gray-300 rounded-full z-10"></div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Sidang Skripsi</p>
                </div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center">
                    <div class="w-8 h-8 bg-white border-2 border-gray-300 rounded-full z-10"></div>
                    <p class="mt-2 text-xs sm:text-sm text-gray-500">Final Skripsi</p>
                </div>
            </div>
        </div>

        {{-- Form Section (disesuaikan dengan gaya baru) --}}
        <div class="space-y-6 max-w-3xl mx-auto pt-8">
            <div class="flex items-start space-x-4">
                <label for="rincian-proposal" class="w-32 text-sm font-medium text-gray-700 pt-2.5">Rincian Proposal</label>
                <textarea id="rincian-proposal" rows="3"
                    class="flex-grow bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5"
                    placeholder="latar belakang, perumusan masalah, tujuan, ruang lingkup, teori"></textarea>
            </div>
            <div class="flex items-center space-x-4">
                <label for="submit-proposal" class="w-32 text-sm font-medium text-gray-700">Submit Proposal</label>
                <div class="flex-grow flex items-center space-x-3">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300"
                        id="file_input" type="file">
                    <button type="submit"
                        class="px-8 py-2 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Submit</button>
                </div>
            </div>
        </div>

        {{-- History Table Section --}}
        <div class="mt-12">
            <h3 class="text-sm font-medium text-gray-700 mb-2">History Proposal</h3>
            <div class="relative overflow-x-auto border sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-600">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-6 py-3">Tanggal</th>
                            <th scope="col" class="px-6 py-3">Revisi ke-</th>
                            <th scope="col" class="px-6 py-3">Penjelasan</th>
                            <th scope="col" class="px-6 py-3">Dokumen</th>
                            <th scope="col" class="px-6 py-3">ACC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">1 Agustus 2024</td>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">kurang rinci di bagian latar belakang</td>
                            <td class="px-6 py-4">1</td>
                            <td class="px-6 py-4">Dosbing Kabid</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">8 Agustus 2024</td>
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">sumber kurang terpercaya</td>
                            <td class="px-6 py-4">2</td>
                            <td class="px-6 py-4">Dosbing Kabid</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">15 Agustus 2024</td>
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">banyaknya typo</td>
                            <td class="px-6 py-4">3</td>
                            <td class="px-6 py-4">Dosbing Kabid</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">22 Agustus 2024</td>
                            <td class="px-6 py-4">4</td>
                            <td class="px-6 py-4">dalam analisis kurang jelas</td>
                            <td class="px-6 py-4">4</td>
                            <td class="px-6 py-4">Dosbing Kabid</td>
                        </tr>
                        <tr class="bg-white">
                            <td class="px-6 py-4">29 Agustus 2024</td>
                            <td class="px-6 py-4">5</td>
                            <td class="px-6 py-4">metode yang digunakan kurang efisien</td>
                            <td class="px-6 py-4">5</td>
                            <td class="px-6 py-4">Dosbing Kabid</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection