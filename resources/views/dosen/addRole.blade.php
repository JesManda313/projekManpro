<!-- {{-- Menggunakan layout dasar dari 'layout.base' --}}
@extends('layout.base')
@extends('layout.sidebarDosen')

{{-- Memulai bagian konten yang akan disuntikkan ke dalam layout --}}
@section('content1')

<div class="p-4 sm:p-8">

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        
        {{-- TABS NAVIGASI (DIPERBAIKI) --}}
        <div class="w-full border-b border-gray-200 mb-6">
            <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
                <nav class="flex text-sm sm:text-base space-x-1">
                    <a href="{{ url('/dosen/listMahasiswa') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">List Mahasiswa</a>
                    <a href="{{ url('/dosen/addRole') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Add Role</a>
                    <a href="{{ url('/dosen/addVenue') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Venue</a>
                    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Add Dosen Penguji</a>
                </nav>
            </div>
        </div>

        {{-- FORM UNTUK MENAMBAH/MENGEDIT ROLE --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
            <div class="space-y-4">
                <div>
                    <label for="nama_dosen" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" value="Gregorius">
                </div>
                <div>
                    <label for="bidang" class="block mb-2 text-sm font-medium text-gray-900">Bidang</label>
                    <select id="bidang" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5">
                        <option>Game Development</option>
                        <option selected>Artificial Intelligence</option>
                    </select>
                </div>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                    <div class="flex items-center gap-2">
                        <button class="flex-1 px-4 py-2.5 text-sm rounded-lg border bg-gray-100 text-gray-800 hover:bg-gray-200">Dosbing 2</button>
                        <button class="flex-1 px-4 py-2.5 text-sm rounded-lg border bg-gray-100 text-gray-800 hover:bg-gray-200">Dosbing 1</button>
                        <button class="flex-1 px-4 py-2.5 text-sm rounded-lg border bg-yellow-400 text-yellow-900 font-semibold ring-2 ring-yellow-500">Kabid</button>
                    </div>
                </div>
                <div>
                    <label for="kuota" class="block mb-2 text-sm font-medium text-gray-900">Kuota</label>
                    <input type="number" id="kuota" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" value="3">
                </div>
            </div>
            <div class="md:col-span-2 flex justify-end">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-8 rounded-lg">Save</button>
            </div>
        </div>

        {{-- FILTER DAN TABEL LIST DOSEN --}}
        <div class="border-t pt-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"><option selected>Search Nama</option></select>
                <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"><option selected>Search Bidang</option></select>
                <select class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5"><option selected>Select Role</option></select>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="text-xs text-gray-800 uppercase bg-gray-100">
                        <tr>
                            <th class="px-6 py-3">Nama Dosen</th>
                            <th class="px-6 py-3">Bidang</th>
                            <th class="px-6 py-3">Role</th>
                            <th class="px-6 py-3">Kuota</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Liliana</td><td class="px-6 py-4">Game Development</td><td class="px-6 py-4">Kabid</td><td class="px-6 py-4">5</td><td></td></tr>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Andreas</td><td class="px-6 py-4">Software</td><td class="px-6 py-4">Dosbing 1</td><td class="px-6 py-4">6</td><td></td></tr>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Henry</td><td class="px-6 py-4">Data Science</td><td class="px-6 py-4">Dosbing 2</td><td class="px-6 py-4">5</td><td></td></tr>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Haris</td><td class="px-6 py-4">Pemrograman</td><td class="px-6 py-4">Kabid</td><td class="px-6 py-4">2</td><td></td></tr>
                        <tr class="bg-yellow-50 border-b hover:bg-yellow-100"><td class="px-6 py-4 font-semibold">Gregorius</td><td class="px-6 py-4">Artificial Intelligence</td><td class="px-6 py-4">Dosbing 2</td><td class="px-6 py-4">3</td><td class="px-6 py-4 text-right"><a href="#" class="font-medium text-blue-600 hover:underline">Edit</a></td></tr>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Agustinus</td><td class="px-6 py-4">Cyber Security</td><td class="px-6 py-4">Dosbing 1</td><td class="px-6 py-4">5</td><td></td></tr>
                        <tr class="bg-white border-b hover:bg-gray-50"><td class="px-6 py-4">Alexander</td><td class="px-6 py-4">Information System</td><td class="px-6 py-4">Kabid</td><td class="px-6 py-4">5</td><td></td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection -->