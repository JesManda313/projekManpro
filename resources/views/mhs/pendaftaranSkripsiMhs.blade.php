@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-7xl mx-auto">
        <div class="mb-8 sm:mb-10 overflow-x-auto">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-start min-w-max">

                @php
                    $steps = ['Judul', 'Pilih Dosbing', 'Upload Proposal', 'Sidang Proposal', 'Final Proposal', 'Upload Skripsi', 'Sidang Skripsi', 'Final Skripsi'];
                    $currentStepIndex = 5; 
                @endphp

                @foreach($steps as $index => $step)
                    <div class="flex flex-col items-center w-16 flex-shrink-0">

                        @if($index < $currentStepIndex)
                            <div
                                class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700 text-center">{{ $step }}</p>

                        @elseif($index == $currentStepIndex)
                            <div class="w-7 h-7 bg-black border-2 border-black rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700 text-center">{{ $step }}</p>

                        @else
                            <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm text-gray-500 text-center">{{ $step }}</p>
                        @endif

                    </div>

                    @if(!$loop->last)
                        <div
                            class="flex-auto border-t-2 {{ $index < $currentStepIndex ? 'border-green-500' : 'border-gray-300' }} mx-2 mt-3">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="space-y-6 max-w-3xl mx-auto pt-8">
            <div class="flex items-start space-x-4">
                <label for="rincian-proposal" class="w-32 text-sm font-medium text-gray-700 pt-2.5">Rincian Skripsi</label>
                <textarea id="rincian-proposal" rows="3"
                    class="flex-grow bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5"
                    placeholder="latar belakang, perumusan masalah, tujuan, ruang lingkup, teori"></textarea>
            </div>
            <div class="flex items-center space-x-4">
                <label for="submit-proposal" class="w-32 text-sm font-medium text-gray-700">Submit Skripsi</label>
                <div class="flex-grow flex items-center space-x-3">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300"
                        id="file_input" type="file">
                    <button type="submit"
                        class="px-8 py-2 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Submit</button>
                </div>
            </div>
        </div>

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
                        @php
                            $history = [
                                ['tanggal' => '1 Agustus 2024', 'revisi' => 1, 'penjelasan' => 'kurang rinci di bagian latar belakang', 'dokumen' => 1, 'acc' => 'Dosbing Kabid'],
                                ['tanggal' => '8 Agustus 2024', 'revisi' => 2, 'penjelasan' => 'sumber kurang terpercaya', 'dokumen' => 2, 'acc' => 'Dosbing Kabid'],
                                ['tanggal' => '15 Agustus 2024', 'revisi' => 3, 'penjelasan' => 'banyaknya typo', 'dokumen' => 3, 'acc' => 'Dosbing Kabid'],
                                ['tanggal' => '22 Agustus 2024', 'revisi' => 4, 'penjelasan' => 'dalam analisis kurang jelas', 'dokumen' => 4, 'acc' => 'Dosbing Kabid'],
                                ['tanggal' => '29 Agustus 2024', 'revisi' => 5, 'penjelasan' => 'metode yang digunakan kurang efisien', 'dokumen' => 5, 'acc' => 'Dosbing Kabid'],
                            ];
                        @endphp

                        @foreach ($history as $item)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['tanggal'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['revisi'] }}</td>
                                <td class="px-6 py-4">{{ $item['penjelasan'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-blue-600 hover:text-blue-800 cursor-pointer">
                                    {{ $item['dokumen'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold">{{ $item['acc'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection