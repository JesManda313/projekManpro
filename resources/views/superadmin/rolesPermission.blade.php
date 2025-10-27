@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')
<div class="p-4 sm:p-8">

    <div class="w-full border-b border-gray-200 mb-6">
        <div class="overflow-x-auto whitespace-nowrap no-scrollbar">
            <nav class="flex text-sm sm:text-base space-x-1">
                <a href="{{ url('/superadmin/rolesPermission') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-black bg-gray-100 rounded-t-lg font-semibold">
                    Roles & Permissions
                </a>
                <a href="{{ url('/superadmin/assignLecturerRoles') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-100 hover:text-gray-800 transition-colors">
                    Assign Roles
                </a>
            </nav>
        </div>
    </div>

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">

        @php
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

            {{-- SIDEBAR ROLE LIST --}}
            <div class="lg:col-span-1">
                <form action="{{ url('/superadmin/storeRole') }}" method="POST" class="mb-8">
                    @csrf
                    <label for="role_name" class="block mb-3 text-base font-semibold text-gray-800">Create New Role</label>
                    <div class="flex flex-col sm:flex-row gap-2">
                        <input type="text" id="role_name" name="role_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 focus:ring-2 focus:ring-blue-500" placeholder="e.g., new-role" required>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-5 rounded-lg">
                            Add
                        </button>
                    </div>
                </form>

                <h2 class="text-xl font-semibold text-gray-800 mb-4">Available Roles</h2>
                <div class="space-y-2">
                    @foreach ($roles as $role)
                        <a href="{{ url('/superadmin/rolesPermission') }}?role={{ $role['slug'] }}"
                           class="block p-3 text-center sm:text-left rounded-lg transition-all duration-200 @if ($selectedRoleSlug == $role['slug']) bg-blue-100 text-blue-700 font-semibold shadow-sm @else text-gray-700 hover:bg-gray-100 font-medium @endif">
                            {{ $role['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- MAIN CONTENT --}}
            <div class="lg:col-span-2">

                {{-- CREATE PERMISSION --}}
                <div class="mb-8 border-b pb-6">
                    <form action="{{ url('/superadmin/storePermission') }}" method="POST">
                        @csrf
                        <label for="permission_name" class="block mb-3 text-base font-semibold text-gray-800">Create New Permission</label>
                        <div class="flex flex-col sm:flex-row gap-2">
                            <input type="text" id="permission_name" name="permission_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 focus:ring-2 focus:ring-blue-500" placeholder="e.g., manage-finances" required>
                            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold py-2 px-5 rounded-lg">
                                Add
                            </button>
                        </div>
                    </form>
                </div>

                {{-- ASSIGN PERMISSION --}}
                <form action="{{ url('/superadmin/assignPermissions') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="role_slug" value="{{ $selectedRoleSlug }}">

                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                        <h2 class="text-2xl font-bold text-gray-800 leading-tight">
                            Edit Role: <span class="text-blue-600 font-extrabold">{{ $selectedRoleName }}</span>
                        </h2>
                        <button type="submit" class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-white font-semibold text-sm sm:text-base py-2.5 px-6 rounded-lg shadow transition-all duration-200">
                            Save Changes
                        </button>
                    </div>

                    <div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-4">Assign Permissions</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100 transition-all duration-150">
                                <input type="checkbox" name="permissions[]" value="view-students" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-800">View Students</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100 transition-all duration-150">
                                <input type="checkbox" name="permissions[]" value="edit-student-status" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-800">Edit Student Status</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100 transition-all duration-150">
                                <input type="checkbox" name="permissions[]" value="assign-supervisors" checked class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-800">Assign Supervisors</span>
                            </label>
                            <label class="flex items-center p-3 bg-gray-50 rounded-lg border hover:bg-gray-100 transition-all duration-150">
                                <input type="checkbox" name="permissions[]" value="view-student-details" class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                                <span class="ml-3 text-sm font-medium text-gray-800">View Student Details</span>
                            </label>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
