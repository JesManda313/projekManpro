@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">
        <div class="mb-8 sm:mb-10 overflow-x-auto">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-center min-w-max">
                @php
                    $steps = ['Judul', 'Pilih Dosbing', 'Proposal', 'Sidang', 'Final', 'Skripsi', 'Sidang Skripsi', 'Final Skripsi'];

                    $currentStepIndex = 6; 
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

        <div class="pt-4 md:pt-8 mb-16 md:mb-20">
            <div class="bg-white p-4 md:p-8 rounded-lg">
                {{-- Variabel Simulasi Data Sidang --}}
                @php
                    $tanggalSidang = 'Senin, 10 November 2025';
                    $jamSidang = '10.00';
                @endphp

                {{-- Kontainer Sidang --}}
                <div class="flex flex-col items-center justify-center min-h-[50vh] p-0 md:p-4">
    
                    <h1 class="text-2xl md:text-4xl font-semibold text-gray-800 mb-8 md:mb-10 text-center">Jadwal Sidang Skripsi</h1>

                    <div class="w-full max-w-sm sm:max-w-lg bg-gray-100 p-6 md:p-10 rounded-lg shadow-xl relative">
        
                        <div class="text-center space-y-3 md:space-y-4">
                            <p class="text-xl md:text-3xl font-semibold text-gray-800">{{ $tanggalSidang }}</p>
                            <p class="text-2xl md:text-4xl font-bold text-gray-900">Pk: {{ $jamSidang }}</p>
                        </div>
        
                        {{-- Bagian Status LULUS --}}
                        <div class="mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-300 text-center"> 
            
                            {{-- Badge status menggunakan w-full di mobile dan padding vertikal disesuaikan --}}
                            <span class="block w-full py-2 text-lg md:text-xl text-white font-medium rounded-lg shadow-lg bg-green-600">
                                STATUS
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection