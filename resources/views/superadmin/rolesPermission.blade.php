@extends('layout.base')
@extends('layout.sidebarDosen') 

@section('content1')

<div class="p-4 sm:p-8">

    {{-- TABS NAVIGASI --}}
    <div class="w-full border-b border-gray-200 mb-6">
        <div class="overflow-x-auto whitespace-nowrap [-ms-overflow-style:none] [scrollbar-width:none]">
            <nav class="flex text-sm sm:text-base space-x-1">
                <a href="{{ url('/superadmin/rolesPermission') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-white bg-gray-700 rounded-t-lg font-semibold">Roles & Permissions</a>
                <a href="{{ url('/superadmin/assignLecturerRoles') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-500 hover:text-gray-800">Assign Roles</a>
            </nav>
        </div>
    </div>
    
    {{-- KONTEN CARD PUTIH --}}
    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Roles & Permissions</h1>

        @php
            // Logika untuk highlight role yang aktif
            $selectedRoleSlug = request('role', 'head_of_thesis_department');
            $roles = [
                ['slug' => 'head_of_thesis_department', 'name' => 'Head of Thesis Department'],
                ['slug' => 'head_of_division', 'name' => 'Head of Division'],
                ['slug' => 'senior_supervisor', 'name' => 'Senior Supervisor'],
                ['slug' => 'supervisor', 'name' => 'Supervisor'],
            ];
            $selectedRoleName = collect($roles)->firstWhere('slug', $selectedRoleSlug)['name'] ?? 'Unknown Role';
        @endphp

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            {{-- KOLOM KIRI: BUAT ROLE & DAFTAR ROLE --}}
            <div class="lg:col-span-1">
                
                {{-- PERMINTAAN 1: FORM UNTUK ROLE BARU --}}
                <form action="{{ url('/superadmin/storeRole') }}" method="POST" class="mb-6">
                    @csrf
                    <label for="role_name" class="block mb-2 text-sm font-semibold text-gray-700">Create New Role</label>
                    <div class="flex gap-2">
                        <input type="text" id="role_name" name="role_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="e.g., new-role" required>
                        <button type="submit" class="flex-shrink-0 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg">
                            Add
                        </button>
                    </div>
                </form>

                <h2 class="text-lg font-semibold text-gray-700 mb-4">Available Roles</h2>
                <div class="space-y-2">
                    @foreach ($roles as $role)
                        <a href="{{ url('/superadmin/rolesPermission') }}?role={{ $role['slug'] }}" 
                           class="block p-3 rounded-lg @if ($selectedRoleSlug == $role['slug']) bg-blue-100 text-blue-700 font-semibold @else text-gray-600 hover:bg-gray-100 font-medium @endif">
                            {{ $role['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- KOLOM KANAN: BUAT PERMISSION & ASSIGN PERMISSION --}}
            <div class="lg:col-span-2">
                
                {{-- PERMINTAAN 2: FORM UNTUK PERMISSION BARU --}}
                <div class="mb-6 border-b pb-6">
                    <form action="{{ url('/superadmin/storePermission') }}" method="POST">
                        @csrf
                        <label for="permission_name" class="block mb-2 text-sm font-semibold text-gray-700">Create New Permission</label>
                        <div class="flex gap-2">
                            <input type="text" id="permission_name" name="permission_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5" placeholder="e.g., manage-finances" required>
                            <button type="submit" class="flex-shrink-0 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 rounded-lg">
                                Add
                            </button>
                        </div>
                    </form>
                </div>

                {{-- FORM UNTUK ASSIGN PERMISSIONS KE ROLE --}}
                <form action="{{ url('/superadmin/assignPermissions') }}" method="POST">
                    @csrf
                    <input type="hidden" name="role_slug" value="{{ $selectedRoleSlug }}">

                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-700">
                            Edit Role: <span class="text-blue-600">{{ $selectedRoleName }}</span>
                        </h2>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
                            Save Changes
                        </button>
                    </div>
                    
                    <div class="pt-4">
                        <h3 class="text-md font-semibold text-gray-600 mb-3">Assign Permissions:</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100">
                                <input type="checkbox" name="permissions[]" value="view-students" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-700">view-students</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100">
                                <input type="checkbox" name="permissions[]" value="edit-student-status" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-700">edit-student-status</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100">
                                <input type="checkbox" name="permissions[]" value="assign-supervisors" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-700">assign-supervisors</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100">
                                <input type="checkbox" name="permissions[]" value="view-student-details" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-700">view-student-details</span>
                            </label>
                        </div>
                    </div>
                </form> {{-- Akhir form assign permissions --}}
            </div>

        </div>
    </div>
</div>

@endsection