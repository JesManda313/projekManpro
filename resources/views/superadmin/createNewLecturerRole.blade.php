@extends('layout.base')
@extends('layout.sidebarDosen')

@section('content1')

<div class="p-4 sm:p-8">
    <div class="w-full border-b border-gray-200 mb-6">
        <div class="overflow-x-auto whitespace-nowrap no-scrollbar">
            <nav class="flex text-sm sm:text-base space-x-1">
                <a href="{{ url('/superadmin/rolesPermission') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-gray-100 hover:text-gray-800 transition-colors">
                    Roles & Permissions
                </a>
                <a href="{{ url('/superadmin/assignLecturerRoles') }}" class="inline-block flex-shrink-0 py-2 px-3 sm:px-4 text-black bg-gray-100 rounded-t-lg font-semibold">
                    Assign Roles
                </a>
            </nav>
        </div>
    </div>

    <div class="bg-white/95 backdrop-blur-sm p-4 sm:p-6 rounded-2xl shadow-lg">
        <div class="flex flex-col sm:flex-row justify-between sm:items-center gap-3 mb-6">
            <h1 class="text-xl sm:text-2xl font-bold text-gray-800 leading-snug text-center sm:text-left">
                Add New Lecturer <span class="font-normal text-gray-600">& Assign Roles</span>
            </h1>
            <button type="submit" form="lecturerForm" class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-lg transition-all text-sm sm:text-base">
                Save Lecturer
            </button>
        </div>

        <form id="lecturerForm" action="{{ url('/superadmin/storeNewLecturerRole') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div>
                    <label for="nama_dosen" class="block mb-2 text-sm font-semibold text-gray-800">
                        Lecturer Name
                    </label>
                    <input type="text" id="nama_dosen" name="nama_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="e.g., John Doe" required>
                </div>
                <div>
                    <label for="email_dosen" class="block mb-2 text-sm font-semibold text-gray-800">
                        Lecturer Email
                    </label>
                    <input type="email" id="email_dosen" name="email_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="e.g., john@petra.ac.id" required>
                </div>
                <div>
                    <label for="nrp_dosen" class="block mb-2 text-sm font-semibold text-gray-800">
                        NRP / NIDN
                    </label>
                    <input type="text" id="nrp_dosen" name="nrp_dosen" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-3 focus:ring-2 focus:ring-blue-400 focus:border-blue-400" placeholder="e.g., c14230001">
                </div>
            </div>

            <div class="border-t border-gray-200 pt-6">
                <h2 class="text-lg sm:text-xl font-bold text-gray-700 mb-3">
                    Available Roles
                </h2>
                <p class="text-sm text-gray-500 mb-5">
                    Select one or more roles to assign to this lecturer.
                </p>

                @php
                    $availableRoles = [
                        ['id' => 1, 'name' => 'Head of Thesis Department'],
                        ['id' => 2, 'name' => 'Head of Division'],
                        ['id' => 3, 'name' => 'Senior Supervisor'],
                        ['id' => 4, 'name' => 'Supervisor'],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    @foreach ($availableRoles as $role)
                        <label class="flex items-center p-4 border border-gray-200 rounded-xl hover:bg-gray-50 cursor-pointer transition-all">
                            <input type="checkbox" name="roles[]" value="{{ $role['id'] }}" class="h-5 w-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500 transition-all">
                            <span class="ml-3 text-sm sm:text-base font-medium text-gray-700">
                                {{ $role['name'] }}
                            </span>
                        </label>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
