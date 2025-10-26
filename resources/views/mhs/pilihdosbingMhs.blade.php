@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-8 rounded-xl shadow-lg">
        <div class="mb-8 sm:mb-10 overflow-x-auto">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-center min-w-max">
                @php
                    $steps = ['Judul', 'Pilih Dosbing', 'Proposal', 'Sidang', 'Final', 'Skripsi', 'Sidang Skripsi', 'Final Skripsi'];

                    $currentStepIndex = 1; 
                @endphp

                @foreach($steps as $index => $step)
                    <div class="flex flex-col items-center flex-shrink-0">

                        @if($index < $currentStepIndex)
                            <div
                                class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700">{{ $step }}</p>

                        @elseif($index == $currentStepIndex)
                            <div class="w-7 h-7 bg-black border-2 border-black rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700">{{ $step }}</p>

                        @else
                            <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm text-gray-500">{{ $step }}</p>
                        @endif

                    </div>

                    @if(!$loop->last)
                        <div
                            class="flex-auto border-t-2 {{ $index < $currentStepIndex ? 'border-green-500' : 'border-gray-300' }} mx-2">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="space-y-6 max-w-xl mx-auto pt-8 mb-20">
            <div class="flex items-center space-x-4"><label for="dosbing1"
                    class="w-28 text-sm font-medium text-gray-700">Dosbing 1</label><input type="text" id="dosbing1"
                    class="flex-grow bg-gray-100 border border-gray-300 rounded-lg p-2.5"
                    placeholder="Cari nama dosen..."><button
                    class="px-6 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300">Ajukan</button>
            </div>
            <div class="flex items-center space-x-4"><label for="dosbing2"
                    class="w-28 text-sm font-medium text-gray-700">Dosbing 2</label><input type="text" id="dosbing2"
                    class="flex-grow bg-gray-100 border border-gray-300 rounded-lg p-2.5"
                    placeholder="Cari nama dosen..."><button
                    class="px-6 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300">Ajukan</button>
            </div>
        </div>
    </div>
@endsection