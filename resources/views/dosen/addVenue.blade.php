@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')

<div class="p-4 sm:p-8">
    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        <div class="w-full border-b border-gray-200 mb-6">
            <div class="overflow-x-auto whitespace-nowrap no-scrollbar">
                <nav class="flex text-sm sm:text-base space-x-1">
                    <a href="{{ url('/dosen/listMahasiswa') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800 transition-colors">
                        List Mahasiswa
                    </a>
                    <a href="{{ url('/dosen/addVenue') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">
                        Add Venue
                    </a>
                    <a href="{{ url('/dosen/pilihDosenPenguji') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800 transition-colors">
                        Add Dosen Penguji
                    </a>
                </nav>
            </div>
        </div>

        <div class="mb-8">
            <form class="flex flex-col sm:flex-row items-stretch sm:items-end gap-4 w-full">
                <div class="flex-grow">
                    <label for="nama_kelas" class="block mb-2 text-sm font-semibold text-gray-900">
                        Nama Kelas
                    </label>
                    <input type="text" id="nama_kelas" name="nama_kelas" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="e.g., p.317" required>
                </div>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold py-3 px-6 rounded-lg transition-all text-sm sm:text-base w-full sm:w-auto">
                    Add
                </button>
            </form>
        </div>

        <div class="border-t pt-6">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="text-xs sm:text-sm text-gray-800 uppercase bg-gray-100">
                        <tr>
                            <th scope="col" class="px-4 sm:px-6 py-3 w-12 sm:w-16">No.</th>
                            <th scope="col" class="px-4 sm:px-6 py-3">Nama Kelas</th>
                            <th scope="col" class="px-4 sm:px-6 py-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50 transition">
                            <td class="px-4 sm:px-6 py-4 font-medium">1.</td>
                            <td class="px-4 sm:px-6 py-4 text-gray-800 font-medium">p.317</td>
                            <td class="px-4 sm:px-6 py-4 text-right">
                                <a href="#" class="border-1 border-red-400 rounded-2xl p-2 text-red-600 hover:text-red-700 text-sm sm:text-base">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50 transition">
                            <td class="px-4 sm:px-6 py-4 font-medium">2.</td>
                            <td class="px-4 sm:px-6 py-4 text-gray-800 font-medium">p.209</td>
                            <td class="px-4 sm:px-6 py-4 text-right">
                                <a href="#" class="border-1 border-red-400 rounded-2xl p-2 text-red-600 hover:text-red-700 text-sm sm:text-base">
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b hover:bg-gray-50 transition">
                            <td class="px-4 sm:px-6 py-4 font-medium">3.</td>
                            <td class="px-4 sm:px-6 py-4 text-gray-800 font-medium">p.408</td>
                            <td class="px-4 sm:px-6 py-4 text-right">
                                <a href="#" class="border-1 border-red-400 rounded-2xl p-2 text-red-600 hover:text-red-700 text-sm sm:text-base">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

@endsection
