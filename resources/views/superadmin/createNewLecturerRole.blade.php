@extends('layout.base')
@extends('layout.sidebarDosen') {{-- Pastikan ini sidebar Admin --}}

@section('content1')

<div class="p-4 sm:p-8">

    {{-- TABS NAVIGASI --}}
    <div class="w-full border-b border-gray-200 mb-6">
        <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
            <nav class="flex text-sm sm:text-base space-x-1">
                <a href="{{ url('/superadmin/rolesPermission') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Roles & Permissions</a>
                {{-- Tab 'Assign Roles' sekarang aktif --}}
                <a href="{{ url('/superadmin/assignLecturerRoles') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Assign Roles</a>
            </nav>
        </div>
    </div>

    {{-- KONTEN CARD PUTIH --}}
    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        
        {{-- Form untuk menyimpan data --}}
        {{-- Ini akan mengirim data ke RUTE POST BARU --}}
        <form action="{{ url('/superadmin/storeNewLecturerRole') }}" method="POST">
            @csrf
            
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-semibold text-gray-800">Add New Lecturer & Assign Roles</h1>
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
                    Save Lecturer
                </button>
            </div>

            {{-- FORM INPUT DATA DOSEN BARU --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="nama_dosen" class="block mb-2 text-sm font-medium text-gray-900">Lecturer Name</label>
                    <input type="text" id="nama_dosen" name="nama_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="e.g., John Doe" required>
                </div>
                <div>
                    <label for="email_dosen" class="block mb-2 text-sm font-medium text-gray-900">Lecturer Email</label>
                    <input type="email" id="email_dosen" name="email_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="e.g., john@petra.ac.id" required>
                </div>
                 <div>
                    <label for="nrp_dosen" class="block mb-2 text-sm font-medium text-gray-900">NRP / NIDN</label>
                    <input type="text" id="nrp_dosen" name="nrp_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="e.g., c14230001">
                </div>
            </div>

            {{-- PILIHAN ROLES --}}
            <div class="border-t pt-6">
                <h3 class="text-md font-semibold text-gray-600 mb-3">Available Roles:</h3>
                
                @php
                    // Nanti, Anda harusnya mengambil $availableRoles ini dari database
                    $availableRoles = [
                        ['id' => 1, 'name' => 'Head of Thesis Department'],
                        ['id' => 2, 'name' => 'Head of Division'],
                        ['id' => 3, 'name' => 'Senior Supervisor'],
                        ['id' => 4, 'name' => 'Supervisor'],
                    ];
                @endphp
                
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                    
                    @foreach ($availableRoles as $role)
                    <label class="flex items-center p-4 border rounded-lg hover:bg-gray-50 cursor-pointer">
                        {{-- name="roles[]" penting agar bisa submit multiple checkbox --}}
                        <input type="checkbox" name="roles[]" value="{{ $role['id'] }}" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="ml-3 text-sm font-medium text-gray-700">{{ $role['name'] }}</span>
                    </label>
                    @endforeach
                    
                </div>
            </div>

        </form> {{-- Akhir form --}}

    </div>
</div>

@endsection