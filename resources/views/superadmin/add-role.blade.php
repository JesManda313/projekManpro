@extends('layout.base')
@extends('layout.sidebar')
@section('title', 'Add Role Dosen')

@section('content1')
<div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 sm:p-6 md:p-8 rounded-xl shadow-lg">
    
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-6" aria-label="Tabs">
            <a href="{{ url('/admin/dashboard') }}" class="shrink-0 border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                List Mahasiswa
            </a>
            <a href="{{ url('/admin/add-role') }}" class="shrink-0 border-b-2 border-blue-600 px-1 py-4 text-sm font-medium text-blue-600">
                List Others
            </a>
        </nav>
    </div>

    <div class="flex flex-wrap gap-2 my-6">
        <button class="px-4 py-2 text-sm font-medium text-white bg-gray-700 rounded-lg hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">Add Role</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Add Venue</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Assign Ruang</button>
        <button class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-lg hover:bg-gray-300">Pilih Dosen Penguji</button>
    </div>

    <div class="border rounded-lg p-6 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="space-y-6">
                <div>
                    <label for="nama-dosen" class="block text-sm font-medium text-gray-700 mb-1">Nama:</label>
                    <select id="nama-dosen" class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm">
                        <option>Liliana</option>
                        <option>Andreas</option>
                    </select>
                </div>
                <div>
                    <label for="bidang" class="block text-sm font-medium text-gray-700 mb-1">Bidang:</label>
                    <select id="bidang" class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm">
                        <option>Informatics</option>
                        <option>SIB</option>
                        <option>Data Science</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Role:</label>
                <div class="flex flex-wrap items-center gap-2 p-2 bg-gray-100 border border-gray-300 rounded-lg min-h-[42px]">
                    <span class="inline-flex items-center justify-center rounded-md bg-yellow-100 px-2.5 py-1 text-xs font-medium text-yellow-800">Dosbing 2</span>
                    <span class="inline-flex items-center justify-center rounded-md bg-yellow-100 px-2.5 py-1 text-xs font-medium text-yellow-800">Dosbing 1</span>
                    <span class="inline-flex items-center justify-center rounded-md bg-yellow-100 px-2.5 py-1 text-xs font-medium text-yellow-800">Kabid</span>
                    {{-- Roles bisa ditambahkan di sini --}}
                </div>
            </div>

            <div class="space-y-6">
                <div>
                    <label for="kuota" class="block text-sm font-medium text-gray-700 mb-1">Kuota:</label>
                    <input type="number" id="kuota" value="3" class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">&nbsp;</label> {{-- Spacer for alignment --}}
                    <button type="submit" class="w-full px-6 py-2.5 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm"><option selected>Search Nama</option></select>
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm"><option selected>Search Bidang</option></select>
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm"><option selected>Select Role</option></select>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3 text-left font-medium text-gray-600">Nama Dosen</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-600">Bidang</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-600">Role</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-600">Kuota</th>
                    <th class="px-4 py-3 text-left font-medium text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                <tr><td class="px-4 py-3">Liliana</td><td class="px-4 py-3">Game Development</td><td class="px-4 py-3">Kabid</td><td class="px-4 py-3">5</td><td class="px-4 py-3"></td></tr>
                <tr><td class="px-4 py-3">Andreas</td><td class="px-4 py-3">Software</td><td class="px-4 py-3">Dosbing 1</td><td class="px-4 py-3">6</td><td class="px-4 py-3"></td></tr>
                <tr><td class="px-4 py-3">Henry</td><td class="px-4 py-3">Data Science</td><td class="px-4 py-3">Dosbing 2</td><td class="px-4 py-3">7</td><td class="px-4 py-3"></td></tr>
                <tr><td class="px-4 py-3">Hans</td><td class="px-4 py-3">Pemrograman</td><td class="px-4 py-3">Kabid</td><td class="px-4 py-3">2</td><td class="px-4 py-3"></td></tr>
                {{-- Baris yang di-highlight --}}
                <tr class="bg-yellow-50"><td class="px-4 py-3 font-medium">Gregorius</td><td class="px-4 py-3">Artificial Intelligence</td><td class="px-4 py-3">Dosbing 2</td><td class="px-4 py-3">3</td><td class="px-4 py-3"><a href="#" class="text-blue-600 hover:underline">Edit</a></td></tr>
                <tr><td class="px-4 py-3">Agustinus</td><td class="px-4 py-3">Cyber Security</td><td class="px-4 py-3">Dosbing 1</td><td class="px-4 py-3">5</td><td class="px-4 py-3"></td></tr>
                <tr><td class="px-4 py-3">Alexander</td><td class="px-4 py-3">Information System</td><td class="px-4 py-3">Kabid</td><td class="px-4 py-3">5</td><td class="px-4 py-3"></td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection