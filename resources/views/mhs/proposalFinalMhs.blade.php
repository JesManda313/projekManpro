@extends('layout.base')
@extends('layout.sidebar')
@section('content1')
    <div class="bg-white bg-opacity-90 backdrop-blur-sm p-8 rounded-xl shadow-lg">
        <div class="mb-10">
            <h3 class="font-medium text-gray-600 mb-4">Your Progress</h3>
            <div class="flex items-center">
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Judul</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Pilih Dosbing</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Proposal</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-green-500 border-2 border-green-500 rounded-full flex items-center justify-center"><svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg></div><p class="mt-2 text-sm font-medium">Sidang</p></div>
                <div class="flex-auto border-t-2 border-green-500 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-black border-2 border-black rounded-full"></div><p class="mt-2 text-sm text-gray-500">Final</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">Sidang Skripsi</p></div>
                <div class="flex-auto border-t-2 border-gray-300 mx-2"></div>
                <div class="flex flex-col items-center"><div class="w-7 h-7 bg-white border-2 border-gray-300 rounded-full"></div><p class="mt-2 text-sm text-gray-500">FInal Skripsi</p></div>
            </div>
        </div>
        <div class="pt-8 mb-20">
            <div class="bg-white p-8 rounded-lg shadow-xl">
                <div class="p-10 bg-gray-200 min-h-screen flex flex-col justify-between relative">
        
                    <div class="w-full max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-xl">
                        
                        {{-- Kontainer Input Dokumen --}}
                        <div class="flex items-center space-x-4">
                            <label class="text-xl font-semibold text-gray-700 w-48 shrink-0">
                                Submit Proposal FINAL
                            </label>
                            
                            {{-- Kolom Input/Select Dokumen --}}
                            <div class="flex-grow p-0 rounded-lg border border-gray-300 bg-gray-100 flex items-center shadow-inner">
                                <select class="w-full p-3 bg-transparent border-none appearance-none focus:outline-none text-gray-700"
                                        aria-label="Pilih dokumen">
                                    <option value="" disabled selected>Pilih dokumen</option>
                                    <option value="1">Proposal Final V1</option>
                                    <option value="2">Proposal Final V2</option>
                                </select>
                                
                                {{-- TOMBOL SUBMIT ASLI DIHILANGKAN SESUAI PERMINTAAN --}}
                                {{-- <button type="submit" class="px-6 py-3 bg-gray-300 text-gray-700 rounded-r-lg font-medium hover:bg-gray-400">Submit</button> --}}
                            </div>
                        </div>
                        
                        {{-- Area di bawah form, meniru penempatan tombol di sudut kanan bawah --}}
                        <div class="mt-20 text-right">
                            {{-- Tombol "Next" diganti menjadi "Submit" --}}
                            <button type="submit" 
                                    class="px-8 py-3 bg-gray-500 text-white font-semibold rounded-lg shadow-lg hover:bg-gray-600 transition duration-150 ease-in-out">
                                Submit
                            </button>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
@endsection