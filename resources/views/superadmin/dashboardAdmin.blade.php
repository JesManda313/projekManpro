@extends('layout.base')
@extends('layout.sidebar')
@section('title', 'Dashboard Bimbingan')

@section('content1')
<div class="bg-white bg-opacity-90 backdrop-blur-sm p-4 sm:p-6 md:p-8 rounded-xl shadow-lg">
    
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-6" aria-label="Tabs">
            <a href=" {{ url('/admin/dashboard') }}" class="shrink-0 border-b-2 border-blue-600 px-1 py-4 text-sm font-medium text-blue-600">
                List Mahasiswa
            </a>
            <a href="{{ url('/admin/add-role') }}" class="shrink-0 border-b-2 border-transparent px-1 py-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">
                List Others
            </a>
        </nav>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 my-6">
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
            <option selected>Search Nama</option>
            <option>Natasya</option>
            <option>Lindawati</option>
            <option>Willson</option>
        </select>
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
            <option selected>Search Judul</option>
            <option>Machine Learning Prediksi Cuaca</option>
        </select>
        <select class="w-full bg-gray-100 border-gray-300 rounded-lg text-sm focus:ring-blue-500 focus:border-blue-500">
            <option selected>Select Status</option>
            <option>Accepted</option>
            <option>Declined</option>
            <option>Waiting</option>
        </select>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full divide-y divide-gray-200 text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left font-medium text-gray-600">NRP</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium text-gray-600">Nama Mahasiswa</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium text-gray-600">Judul Proposal</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium text-gray-600">Status</th>
                    <th scope="col" class="px-4 py-3 text-left font-medium text-gray-600">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
                {{-- Contoh Data Baris --}}
                @php
                    $mahasiswa = [
                        ['nrp' => 'c14230151', 'nama' => 'Natasya', 'judul' => 'Machine Learning Prediksi Cuaca', 'status_progress' => 'Title Submitted', 'status_action' => 'Accepted', 'status_color' => 'green'],
                        ['nrp' => 'c14230151', 'nama' => 'Lindawati', 'judul' => 'Machine Learning Prediksi Cuaca', 'status_progress' => 'Title Submitted', 'status_action' => 'Declined', 'status_color' => 'red'],
                        ['nrp' => 'c14230151', 'nama' => 'Yemima', 'judul' => 'Machine Learning Prediksi Cuaca', 'status_progress' => 'Proposal Done', 'status_action' => 'Waiting', 'status_color' => 'yellow'],
                        ['nrp' => 'c14230151', 'nama' => 'Jesman', 'judul' => 'Machine Learning Prediksi Cuaca', 'status_progress' => 'Proposal Done', 'status_action' => 'Scheduled', 'status_color' => 'blue'],
                        ['nrp' => 'c14230151', 'nama' => 'Willson', 'judul' => 'Machine Learning Prediksi Cuaca', 'status_progress' => 'Thesis', 'status_action' => 'Accepted', 'status_color' => 'green'],
                    ];
                @endphp

                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td class="whitespace-nowrap px-4 py-3 font-medium text-gray-900">{{ $mhs['nrp'] }}</td>
                    <td class="whitespace-nowrap px-4 py-3 text-gray-700">{{ $mhs['nama'] }}</td>
                    <td class="whitespace-nowrap px-4 py-3 text-gray-700">{{ $mhs['judul'] }}</td>
                    <td class="whitespace-nowrap px-4 py-3 text-gray-700">{{ $mhs['status_progress'] }}</td>
                    <td class="whitespace-nowrap px-4 py-3">
                        <div class="flex items-center gap-2">
                            <span class="inline-flex items-center justify-center rounded-full bg-{{$mhs['status_color']}}-100 px-2.5 py-0.5 text-{{$mhs['status_color']}}-700">
                                <p class="whitespace-nowrap text-xs">{{ $mhs['status_action'] }}</p>
                            </span>
                            <button class="text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection