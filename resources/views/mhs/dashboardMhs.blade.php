@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-7xl mx-auto">
        <div class="mb-8 sm:mb-10 overflow-x-auto">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-start min-w-max">

                @php
                    $steps = ['Judul', 'Pilih Dosbing', 'Upload Proposal', 'Sidang Proposal', 'Final Proposal', 'Upload Skripsi', 'Sidang Skripsi', 'Final Skripsi'];
                    $currentStepIndex = 0; 
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

        <div class="space-y-6">
            <div>
                <label for="input-judul" class="block mb-2 text-sm font-medium text-gray-700">Input Judul</label>
                <div class="flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0">
                    <input type="text" id="input-judul"
                        class="flex-grow bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5"
                        placeholder="Masukkan judul proposal...">
                    <button
                        class="px-6 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300 w-full sm:w-auto">Search</button>
                </div>
            </div>

            <div>
                <label for="list-judul" class="block mb-2 text-sm font-medium text-gray-700">List Judul</label>
                <textarea id="list-judul" rows="4"
                    class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5" disabled></textarea>
            </div>

            <div>
                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="deskripsi" rows="6" class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5"
                    placeholder="Jelaskan deskripsi singkat..."></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit"
                    class="px-8 py-2.5 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 w-full sm:w-auto">Submit</button>
            </div>
        </div>
    </div>
@endsection