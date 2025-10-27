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

    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-6 sm:p-8 rounded-xl shadow-lg max-w-7xl mx-auto">

        @php
            $steps = ['Judul', 'Pilih Dosbing', 'Upload Proposal', 'Sidang Proposal', 'Final Proposal', 'Upload Skripsi', 'Sidang Skripsi', 'Final Skripsi'];
            $currentStepIndex = 2; // Tahap aktif: 'Upload Proposal'
            
            $history = [
                ['tanggal' => '1 Agustus 2024', 'revisi' => 1, 'penjelasan' => 'kurang rinci di bagian latar belakang', 'dokumen' => 1, 'acc' => 'Dosbing Kabid'],
                ['tanggal' => '8 Agustus 2024', 'revisi' => 2, 'penjelasan' => 'sumber kurang terpercaya', 'dokumen' => 2, 'acc' => 'Dosbing Kabid'],
                ['tanggal' => '15 Agustus 2024', 'revisi' => 3, 'penjelasan' => 'banyaknya typo', 'dokumen' => 3, 'acc' => 'Dosbing Kabid'],
                ['tanggal' => '22 Agustus 2024', 'revisi' => 4, 'penjelasan' => 'dalam analisis kurang jelas', 'dokumen' => 4, 'acc' => 'Dosbing Kabid'],
                ['tanggal' => '29 Agustus 2024', 'revisi' => 5, 'penjelasan' => 'metode yang digunakan kurang efisien', 'dokumen' => 5, 'acc' => 'Dosbing Kabid'],
            ];
            // TIDAK PERLU Carbon::setLocale('id') lagi
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
                            <div
                                class="flex-auto border-t-2 {{ $index < $currentStepIndex ? 'border-green-500' : 'border-gray-300' }} mx-2 mt-3">
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            {{-- FORM SUBMIT & RINCIAN (DESKTOP) --}}
            <form action="action_url" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-6 max-w-3xl mx-auto pt-8">
                    <div class="flex items-start space-x-4">
                        <label for="jurusan_desktop" class="w-32 text-sm font-medium text-gray-700 pt-2.5">Rincian Proposal</label>
                        <textarea id="jurusan_desktop" name="jurusan" rows="3"
                            class="flex-grow bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 w-full"
                            placeholder="latar belakang, perumusan masalah, tujuan, ruang lingkup, teori"></textarea>
                    </div>

                    <div class="flex items-center space-x-4">
                        <label for="file_input_desktop" class="w-32 text-sm font-medium text-gray-700">Submit Proposal</label>
                        <div class="flex-grow flex items-center space-x-3">
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300"
                                id="file_input_desktop" name="proposal_file" type="file">
                            <button type="submit"
                                class="px-8 py-2 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Submit</button>
                        </div>
                    </div>
                </div>
            </form>

            {{-- HISTORY PROPOSAL (DESKTOP) --}}
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
                            @foreach ($history as $item)
                                <tr class="bg-white border-b hover:bg-gray-50">
                                    {{-- TIDAK ADA CARBON --}}
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

                        {{-- Body Accordion (Konten & Form Submit) --}}
                        <div id="accordion-body-{{ $index }}" class="overflow-hidden transition-all duration-300 **accordion-content**" 
                            style="{{ $index == $currentStepIndex ? 'max-height: 900px; padding: 10px;' : 'max-height: 0; padding: 0 10px;' }}">
                            
                            <div class="pb-3 pt-1 pl-12 text-gray-600 text-sm">
                                
                                @if($index == $currentStepIndex)
                                    <p class="mt-2 mb-4 text-xs text-gray-500">Silakan isi rincian dan upload file proposal Anda.</p>
                                    
                                    {{-- FORM SUBMIT & RINCIAN (MOBILE) --}}
                                    <form action="action_url" method="POST" enctype="multipart/form-data" class="mt-4">
                                        @csrf
                                        <div class="space-y-4">
                                            
                                            <div class="flex flex-col space-y-2">
                                                <label for="jurusan_mobile" class="text-sm font-medium text-gray-700">Rincian Proposal</label>
                                                <textarea id="jurusan_mobile" name="jurusan" rows="3"
                                                    class="bg-gray-50 border border-gray-300 text-sm rounded-lg p-2.5 w-full"
                                                    placeholder="latar belakang, perumusan masalah, tujuan, ruang lingkup, teori"></textarea>
                                            </div>

                                            <div class="flex flex-col space-y-2">
                                                <label for="file_input_mobile" class="text-sm font-medium text-gray-700">Submit Proposal</label>
                                                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-gray-200 file:text-gray-700 hover:file:bg-gray-300"
                                                    id="file_input_mobile" name="proposal_file" type="file">
                                                <button type="submit" class="w-full px-8 py-2 bg-gray-700 text-white font-medium rounded-lg hover:bg-gray-800 transition duration-200">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                    {{-- HISTORY PROPOSAL (MOBILE) --}}
                                    <div class="mt-8">
                                        <h3 class="text-sm font-medium text-gray-700 mb-2">History Proposal</h3>
                                        <div class="relative overflow-x-auto border rounded-lg">
                                            <table class="w-full text-xs text-left text-gray-600">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">Tgl</th>
                                                        <th scope="col" class="px-3 py-2">Rev</th>
                                                        <th scope="col" class="px-3 py-2">Penjelasan</th>
                                                        <th scope="col" class="px-3 py-2">ACC</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($history as $item)
                                                        <tr class="bg-white border-b hover:bg-gray-50">
                                                            {{-- TIDAK ADA CARBON --}}
                                                            <td class="px-3 py-3 whitespace-nowrap">{{ $item['tanggal'] }}</td> 
                                                            <td class="px-3 py-3 whitespace-nowrap">{{ $item['revisi'] }}</td>
                                                            <td class="px-3 py-3">{{ $item['penjelasan'] }}</td>
                                                            <td class="px-3 py-3 whitespace-nowrap font-semibold">{{ $item['acc'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <p class="p-3 text-xs text-gray-500 text-right">Lihat dokumen revisi (Kolom Dokumen)</p>
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
                targetElement.style.maxHeight = targetElement.scrollHeight + 1500 + 'px'; 
                targetElement.style.padding = '10px';
                button.setAttribute('aria-expanded', 'true');
                icon.classList.add('rotate-180');
            }
        }
    });
</script>
@endpush