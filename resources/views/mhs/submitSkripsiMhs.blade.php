@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">

        <div class="mb-8 sm:mb-10 overflow-x-auto">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-center min-w-max">
                @php
                    $steps = ['Judul', 'Pilih Dosbing', 'Proposal', 'Sidang', 'Final', 'Skripsi', 'Sidang Skripsi', 'Final Skripsi'];

                    $currentStepIndex = 7; 
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

        <form action="action_url" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex items-center space-x-4">
                <label for="file_input" class="w-32 text-sm font-medium text-gray-700">Submit Skripsi Final</label>
                <div class="flex-grow flex items-center space-x-3">
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300"
                        id="file_input" name="proposal_file" type="file">
                    <button type="submit"
                        class="px-8 py-2 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection