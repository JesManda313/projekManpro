@extends('layout.base')
@extends('layout.sidebar')

@section('content1')
    
    <style>
        /* HACK: PENGONTROL DISPLAY MURNI CSS (Biarkan tetap ada) */
        @media (max-width: 767px) {
            #desktop-content-container {
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
            $currentStepIndex = 0; // Tahap aktif: 'Judul'
        @endphp

        <div id="desktop-content-container" class="hidden md:block">
            <div class="mb-8 sm:mb-10 overflow-x-auto">
                <h3 class="font-medium text-gray-600 mb-4 text-sm sm:text-base">Your Progress</h3>
                <div class="flex items-start min-w-max">

                    @foreach($steps as $index => $step)
                        <div class="flex flex-col items-center w-16 flex-shrink-0">

                            @if($index < $currentStepIndex)
                                <div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center z-10">
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
                            <div class="flex-auto border-t-2 {{ $index < $currentStepIndex ? 'border-green-500' : 'border-gray-300' }} mx-2 mt-3">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- FORM INPUT JUDUL (DESKTOP) --}}
            <hr class="border-gray-200 mt-8 mb-4">
            <h4 class="text-lg font-semibold text-gray-700 mb-4">Input Judul Proposal</h4>
            <div class="space-y-6 max-w-3xl mx-auto pt-8">
                <form action="action_url" method="POST">
                    @csrf
                    <div>
                        <label for="input-judul-desktop" class="block mb-2 text-sm font-medium text-gray-700">Input Judul</label>
                        <div class="flex space-x-3">
                            <input type="text" id="input-judul-desktop"
                                class="flex-grow bg-gray-100 border border-gray-300 text-sm rounded-lg p-2.5"
                                placeholder="Masukkan judul proposal...">
                            <button
                                class="px-6 py-2.5 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800">Search</button>
                        </div>
                    </div>

                    {{-- PERUBAHAN DI SINI: Ditambah mt-4 --}}
                    <div class="mt-4">
                        <label for="list-judul-desktop" class="block mb-2 text-sm font-medium text-gray-700">List Judul</label>
                        <textarea id="list-judul-desktop" rows="4"
                            class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5" disabled></textarea>
                    </div>

                    {{-- PERUBAHAN DI SINI: Ditambah mt-4 --}}
                    <div class="mt-4">
                        <label for="deskripsi-desktop" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea id="deskripsi-desktop" rows="6" name="deskripsi" class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5"
                            placeholder="Jelaskan deskripsi singkat..."></textarea>
                    </div>

                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="px-8 py-2.5 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800">Submit</button>
                    </div>
                </form>
            </div>
        </div> {{-- End Desktop Container --}}


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
                                    <div class="w-4 h-4 mr-3 border-2 border-black rounded-full flex items-center justify-center flex-shrink-0">
                                        <div class="w-2 h-2 bg-black rounded-full"></div> 
                                    </div>
                                @else
                                    <div class="w-4 h-4 mr-3 border-2 border-gray-300 rounded-full flex items-center justify-center flex-shrink-0"></div>
                                @endif
                                <span>{{ $step }}</span>
                            </div>

                            <svg class="w-4 h-4 transform transition-transform duration-300 **accordion-icon** {{ $index == $currentStepIndex ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        {{-- Body Accordion (Konten & Form Submit) --}}
                        <div id="accordion-body-{{ $index }}" class="overflow-hidden transition-all duration-300 **accordion-content**" 
                            style="{{ $index == $currentStepIndex ? 'max-height: 900px; padding: 10px;' : 'max-height: 0; padding: 0 10px;' }}">
                            
                            <div class="pb-3 pt-1 text-gray-600 text-sm">
                                
                                @if($index == $currentStepIndex)
                                    {{-- FORM INPUT JUDUL (MOBILE) --}}
                                    <form action="action_url" method="POST" class="space-y-4">
                                        @csrf
                                        
                                        <h5 class="text-base font-semibold text-gray-700 mb-2">Input Judul Proposal</h5>
                                        
                                        {{-- Input Judul + Search Button --}}
                                        <div>
                                            <label for="input-judul-mobile" class="block mb-2 text-sm font-medium text-gray-700">Input Judul</label>
                                            <div class="flex space-x-2">
                                                <input type="text" id="input-judul-mobile"
                                                    class="flex-grow bg-gray-100 border border-gray-300 text-sm rounded-lg p-2.5"
                                                    placeholder="Masukkan judul proposal...">
                                                <button
                                                    class="px-4 py-2.5 bg-gray-700 text-white font-medium rounded-lg text-sm hover:bg-gray-800 flex-shrink-0">Search</button>
                                            </div>
                                        </div>

                                        {{-- PERUBAHAN DI SINI: Ditambah mt-4 --}}
                                        <div class="mt-4">
                                            <label for="list-judul-mobile" class="block mb-2 text-sm font-medium text-gray-700">List Judul</label>
                                            <textarea id="list-judul-mobile" rows="4"
                                                class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5" disabled></textarea>
                                        </div>

                                        {{-- PERUBAHAN DI SINI: Ditambah mt-4 --}}
                                        <div class="mt-4">
                                            <label for="deskripsi-mobile" class="block mb-2 text-sm font-medium text-gray-700">Deskripsi</label>
                                            <textarea id="deskripsi-mobile" rows="6" name="deskripsi" class="bg-gray-100 border border-gray-300 text-sm rounded-lg w-full p-2.5"
                                                placeholder="Jelaskan deskripsi singkat..."></textarea>
                                        </div>

                                        {{-- Submit Button --}}
                                        <div class="flex justify-end pt-2 mt-4">
                                            <button type="submit"
                                                class="px-8 py-2.5 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 w-full">Submit</button>
                                        </div>
                                    </form>

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
        const desktopContainer = document.getElementById('desktop-content-container');
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
                targetElement.style.maxHeight = targetElement.scrollHeight + 1000 + 'px'; 
                targetElement.style.padding = '10px';
                button.setAttribute('aria-expanded', 'true');
                icon.classList.add('rotate-180');
            }
        }
    });
</script>
@endpush