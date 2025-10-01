@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-8 rounded-xl shadow-lg">
        <div class="mb-10">
            <h3 class="font-medium text-gray-600 mb-4">Your Progress</h3>
            <div class="flex items-center">
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Judul</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div><p class="mt-2 text-sm font-medium">Pilih Dosbing</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Proposal</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Final</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">FInal Skripsi</p></div>
            </div>
        </div>
        <div class="space-y-6 max-w-xl mx-auto pt-8 mb-20">
            <div class="flex items-center space-x-4"><label for="dosbing1" class="w-28 text-sm font-medium text-gray-700">Dosbing 1</label><input type="text" id="dosbing1" class="flex-grow bg-gray-100 border border-gray-300 rounded-lg p-2.5" placeholder="Cari nama dosen..."><button class="px-6 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300">Ajukan</button></div>
            <div class="flex items-center space-x-4"><label for="dosbing2" class="w-28 text-sm font-medium text-gray-700">Dosbing 2</label><input type="text" id="dosbing2" class="flex-grow bg-gray-100 border border-gray-300 rounded-lg p-2.5" placeholder="Cari nama dosen..."><button class="px-6 py-2.5 bg-gray-200 text-gray-700 font-medium rounded-lg hover:bg-gray-300">Ajukan</button></div>
        </div>
    </div>
@endsection