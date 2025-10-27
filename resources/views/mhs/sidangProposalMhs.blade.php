@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    
    {{-- 
        HACK: PENGONTROL DISPLAY MURNI CSS (Untuk memaksa responsif bekerja)
    --}}
    <style>
        @media (max-width: 767px) {
            #desktop-progress-container {
                display: none !important;
            }
            #mobile-accordion-container {
                display: block !important;
            }
        }
    </style>

    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 md:p-8 rounded-xl shadow-lg">

        @php
            // Variabel PHP untuk logic:
            $steps = ['Judul', 'Pilih Dosbing', 'Upload Proposal', 'Sidang Proposal', 'Final Proposal', 'Upload Skripsi', 'Sidang Skripsi', 'Final Skripsi'];
            $currentStepIndex = 3; // Tahap aktif: 'Sidang Proposal'
            
            // Variabel Simulasi Data Sidang:
            $tanggalSidang = 'Senin, 10 November 2025';
            $jamSidang = '10.00';
            $statusSidang = 'LULUS';
        @endphp

        <div class="mb-8 sm:mb-10 overflow-x-auto **hidden md:block**" 
             id="desktop-progress-container"> 
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div class="flex items-start min-w-max">

                @foreach($steps as $index => $step)
                    <div class="flex flex-col items-center w-16 flex-shrink-0">

                        @if($index < $currentStepIndex)
                            {{-- Step Selesai --}}
                            <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700 text-center">{{ $step }}</p>

                        @elseif($index == $currentStepIndex)
                            {{-- Step Aktif (Lingkaran Hitam Solid) --}}
                            <div class="w-7 h-7 bg-black border-2 border-black rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-gray-700 text-center">{{ $step }}</p>

                        @else
                            <div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full z-10"></div>
                            <p class="mt-2 text-xs sm:text-sm text-gray-500 text-center">{{ $step }}</p>
                        @endif

                    </div>

                    @if(!$loop->last)
                        <div class="flex-auto border-t-2 {{ $index < $currentStepIndex ? 'border-green-500' : 'border-gray-300' }} mx-2 mt-3">
                        </div>
                    @endif
                @endforeach
            </div>
            
            <hr class="border-gray-200 mt-8 mb-6">
            
            {{-- Konten Utama Sidang Proposal (Desktop) --}}
            <div class="pt-4 md:pt-8 mb-16 md:mb-20">
                <div class="bg-gray-100 p-6 md:p-10 rounded-lg">
                    <div class="flex flex-col items-center justify-center p-0 md:p-4">
        
                        <h1 class="text-2xl md:text-4xl font-semibold text-gray-800 mb-8 md:mb-10 text-center">Jadwal Sidang Proposal</h1>

                        <div class="w-full max-w-sm sm:max-w-lg p-6 md:p-10 rounded-lg shadow-xl relative">
            
                            <div class="text-center space-y-3 md:space-y-4">
                                <p class="text-xl md:text-3xl font-semibold text-gray-800">{{ $tanggalSidang }}</p>
                                <p class="text-2xl md:text-4xl font-bold text-gray-900">Pk: {{ $jamSidang }}</p>
                            </div>
            
                            <div class="mt-6 md:mt-8 pt-3 md:pt-4 border-t border-gray-300 text-center"> 
                                <span class="block w-full py-2 text-lg md:text-xl text-white font-medium rounded-lg shadow-lg bg-green-600">
                                    {{ $statusSidang }}
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="mb-8 sm:mb-10" 
             id="mobile-accordion-container" 
             style="display: none;">
            <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
            <div id="progress-accordion">

                @foreach($steps as $index => $step)
                    <div class="border-b border-gray-200 last:border-b-0">
                        <button type="button"
                            class="w-full py-3 px-1 text-left font-medium text-sm focus:outline-none flex items-center justify-between
                            {{ $index < $currentStepIndex ? 'text-green-600 bg-green-50 hover:bg-green-100' : ($index == $currentStepIndex ? 'text-black bg-gray-100 hover:bg-gray-200' : 'text-gray-500 hover:bg-gray-50') }}"
                            data-accordion-target="#accordion-body-{{ $index }}"
                            aria-expanded="{{ $index == $currentStepIndex ? 'true' : 'false' }}"
                            aria-controls="accordion-body-{{ $index }}">
                            
                            <div class="flex items-center">
                                @if($index < $currentStepIndex)
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                @elseif($index == $currentStepIndex)
                                    {{-- LINGKARAN AKTIF DENGAN TITIK HITAM --}}
                                    <div class="w-4 h-4 mr-3 border-2 border-black rounded-full flex items-center justify-center flex-shrink-0">
                                        <div class="w-2 h-2 bg-black rounded-full"></div> 
                                    </div>
                                @else
                                    <div class="w-4 h-4 mr-3 border-2 border-gray-300 rounded-full flex-shrink-0"></div>
                                @endif
                                <span>{{ $step }}</span>
                            </div>

                            <svg class="w-4 h-4 transform transition-transform duration-300 **accordion-icon** {{ $index == $currentStepIndex ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        {{-- Body Accordion (Konten) --}}
                        <div id="accordion-body-{{ $index }}" class="overflow-hidden transition-all duration-300 **accordion-content**" 
                            style="{{ $index == $currentStepIndex ? 'max-height: 400px; padding: 10px;' : 'max-height: 0; padding: 0 10px;' }}">
                            
                            <div class="pb-3 pt-1 pl-12 text-gray-600 text-sm">
                                
                                @if($index == $currentStepIndex)
                                    {{-- KONTEN UTAMA SIDANG PROPOSAL DI SINI --}}
                                    <p><strong>Status Saat Ini:</strong> Sidang Proposal sudah terjadwal.</p>

                                    <div class="mt-4 p-4 bg-white rounded-lg shadow">
                                        <h4 class="text-lg font-semibold text-gray-700 text-center mb-3">Jadwal Anda</h4>
                                        <div class="text-center space-y-2">
                                            <p class="text-xl font-semibold text-gray-800">{{ $tanggalSidang }}</p>
                                            <p class="text-2xl font-bold text-gray-900">Pk: {{ $jamSidang }}</p>
                                        </div>
                                        <div class="mt-4 pt-3 border-t border-gray-200 text-center"> 
                                            <span class="block py-1 text-base text-white font-medium rounded-lg bg-green-600">
                                                {{ $statusSidang }}
                                            </span>
                                        </div>
                                    </div>
                                    
                                @elseif($index < $currentStepIndex)
                                    <p>Tahap **{{ $step }}** telah diselesaikan.</p>
                                @else
                                    <p>Menunggu tahap **{{ $steps[$currentStepIndex] }}** selesai.</p>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const accordionContainer = document.getElementById('mobile-accordion-container');
        const desktopContainer = document.getElementById('desktop-progress-container');
        const desktopBreakpoint = 768; 

        function toggleDisplayBasedOnWidth() {
            if (window.innerWidth >= desktopBreakpoint) {
                if (desktopContainer) {
                    desktopContainer.style.display = 'block';
                }
                if (accordionContainer) {
                    accordionContainer.style.display = 'none';
                }
            } else {
                if (desktopContainer) {
                    desktopContainer.style.display = 'none';
                }
                if (accordionContainer) {
                    accordionContainer.style.display = 'block';
                }
            }
        }

        toggleDisplayBasedOnWidth();
        window.addEventListener('resize', toggleDisplayBasedOnWidth);

        const accordionButtons = document.querySelectorAll('[data-accordion-target]');
        
        accordionButtons.forEach(button => {
            button.addEventListener('click', handleAccordionClick);
        });
        
        function handleAccordionClick() {
            const button = this; 
            const targetId = button.getAttribute('data-accordion-target');
            const targetElement = document.querySelector(targetId);
            const isExpanded = button.getAttribute('aria-expanded') === 'true' || false;
            const icon = button.querySelector('.accordion-icon');

            document.querySelectorAll('.accordion-content').forEach(content => {
                if (content !== targetElement) {
                    content.style.maxHeight = '0';
                    content.style.padding = '0 10px';
                    document.querySelector(`[data-accordion-target="#${content.id}"]`).setAttribute('aria-expanded', 'false');
                    document.querySelector(`[data-accordion-target="#${content.id}"] .accordion-icon`).classList.remove('rotate-180');
                }
            });

            if (isExpanded) {
                targetElement.style.maxHeight = '0';
                targetElement.style.padding = '0 10px';
                button.setAttribute('aria-expanded', 'false');
                icon.classList.remove('rotate-180');
            } else {
                // Nilai ditingkatkan karena konten Jadwal Sidang lebih panjang
                targetElement.style.maxHeight = targetElement.scrollHeight + 150 + 'px'; 
                targetElement.style.padding = '10px';
                button.setAttribute('aria-expanded', 'true');
                icon.classList.add('rotate-180');
            }
        }
    });
</script>
@endpush