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
             class="w-full lg:w-1/3 bg-white flex items-center justify-center p-8 lg:p-5">
            <div class="w-full max-w-sm">
                <img class="pb-6" src="{{ asset('../assets/logopcubiru.png') }}" alt="logopcubiru">
                <h2 class=" text-xl text-gray-500 mb-2">Pendaftaran & Penjadwalan Proposal Skripsi</h2>
                <h3 class="text-2xl font-semibold text-gray-900 mb-3">Reset Password</h3>
                <form action="#" method="POST">
                    {{-- old pass--}}
                    <div class="mb-4">
                        <input type="password" placeholder="Old password"
                            class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                    
                    {{-- new pass --}}
                    <div class="mb-4">
                        <input type="password" placeholder="New password"
                            class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                    
                    {{-- Confirm Password --}}
                    <div class="mb-4">
                        <input type="password" placeholder="Confirm password"
                            class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-700">
                    </div>
                    
                    {{-- Tombol reset --}}
                    <div>
                        <button type="submit" class="w-full bg-gray-700 text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                            RESET
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