@extends('layout.base')

@section('content')
    
    {{-- Solusi Agresif: Menghapus margin dan padding dari body --}}
    <style>
        html, body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100%;
            overflow-x: hidden;
        }
        /* CSS Tambahan: Memaksa kontainer login mengambil 100% tinggi viewport di mobile */
        @media (max-width: 1023px) { /* 1023px adalah batas sebelum lg */
            #login-container-mobile {
                height: 100vh !important;
            }
        }
    </style>

    {{-- Kontainer Utama: flex-col (Mobile) vs flex-row (Desktop) --}}
    <div class="flex flex-col lg:flex-row min-h-screen">
        
        {{-- 1. Kontainer Login (Form) --}}
        {{-- Penambahan ID untuk target CSS murni di mobile --}}
        <div id="login-container-mobile" 
             class="w-full lg:w-1/3 bg-white flex items-center justify-center p-8 lg:p-12">
            <div class="w-full max-w-sm">
                <h1 class="font-playfair text-5xl sm:text-6xl font-bold mb-2 text-gray-800">PETRA</h1>
                <h2 class="text-xl font-medium text-gray-700 mb-8">Pendaftaran & Penjadwalan Proposal Skripsi</h2>

                <form action="#" method="POST">
                    
                    {{-- Input Email --}}
                    <div class="mb-4">
                        <input type="email" placeholder="user@gmail.com"
                            class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                    
                    {{-- Dropdown Domain (@john.petra.ac.id) --}}
                    <div class="mb-4 flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border border-r-0 border-gray-200 rounded-l-lg">@</span>
                        <select class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                            <option>john.petra.ac.id</option>
                            <option>peter.petra.ac.id</option>
                        </select>
                    </div>
                    
                    {{-- Input Password --}}
                    <div class="mb-6">
                        <input type="password" id="password" name="password" 
                            class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                    
                    {{-- Keterangan --}}
                    <div>
                        <p class="text-xs sm:text-sm mb-5 text-gray-600">
                            Keterangan pengisian username: <br>
                            - Mahasiswa : sesuai dengan email di **john.petra.ac.id** <br>
                            - Dosen : sesuai dengan email di **peter.petra.ac.id**
                        </p>
                    </div>
                    
                    {{-- Tombol Login --}}
                    <div>
                        <button type="submit" class="w-full bg-gray-700 text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                            LOG IN
                        </button>
                    </div>
                </form>
            </div>
        </div>

        {{-- 2. Background Image (Hanya Tampil di Desktop) --}}
        <div class="hidden lg:block lg:w-2/3 bg-cover bg-center" 
             style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2574&auto=format&fit=crop');">
        </div>
    </div>
@endsection