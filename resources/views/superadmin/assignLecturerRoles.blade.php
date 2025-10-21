@extends('layout.base')
@extends('layout.sidebarDosen') 

@section('content1')

<div class="p-4 sm:p-8">

    {{-- TABS NAVIGASI --}}
    <div class="w-full border-b border-gray-200 mb-6">
        <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
            <nav class="flex text-sm sm:text-base space-x-1">
                <a href="{{ url('/superadmin/rolesPermission') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Roles & Permissions</a>
                <a href="{{ url('/superadmin/assignLecturerRoles') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Assign Roles</a>
            </nav>
        </div>
    </div>

    {{-- KONTEN CARD PUTIH --}}
    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        {{-- HEADER: JUDUL, SEARCH, DAN TOMBOL ADD BARU --}}
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
            <h1 class="text-2xl font-semibold text-gray-800">Assign Roles to Lecturers</h1>
            
            <div class="flex items-center gap-4">
                {{-- Search Bar --}}
                <input type="text" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-64 p-2.5" placeholder="Search by name or email...">
                
                {{-- TOMBOL BARU YANG ANDA MINTA --}}
                <a href="{{ url('/superadmin/createNewLecturerRole') }}" class="flex-shrink-0 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-5 rounded-lg">
                    Add New Lecturer
                </a>
            </div>
        </div>

        {{-- TABEL LIST DOSEN (SAMA SEPERTI SEBELUMNYA) --}}
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs text-gray-800 uppercase bg-gray-100">
                    <tr>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Email</th>
                        <th class="px-6 py-3">Assigned Roles</th>
                        <th class="px-6 py-3 text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">John</td>
                        <td class="px-6 py-4">john@petra.ac.id</td>
                        <td class="px-6 py-4">
                            <span class="text-xs font-semibold inline-block py-1 px-2.5 rounded-full text-blue-700 bg-blue-100 mr-1">
                                Head of Thesis Department
                            </span>
                            <span class="text-xs font-semibold inline-block py-1 px-2.5 rounded-full text-green-700 bg-green-100 mr-1">
                                Head of Division
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            {{-- Link ke halaman edit (menggunakan ID 1 sebagai contoh) --}}
                            <a href="{{ url('/superadmin/editLecturerRoles/1') }}" class="font-medium text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg text-xs">
                                Manage Roles
                            </a>
                        </td>
                    </tr>
                    {{-- Tambahkan dosen lainnya di sini --}}
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection