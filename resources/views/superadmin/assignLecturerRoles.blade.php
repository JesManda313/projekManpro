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
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
            <h1 class="text-xl sm:text-2xl font-semibold text-gray-800">
                Assign Roles to Lecturers
            </h1>
            
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full sm:w-auto">
                <input 
                    type="text"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg w-full sm:w-64 p-2.5 focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Search by name or email..."
                >
                <a href="{{ url('/superadmin/createNewLecturerRole') }}" 
                   class="bg-blue-600 hover:bg-blue-700 text-white text-center font-semibold py-2.5 px-4 rounded-lg text-sm shadow transition duration-200">
                    Add New Lecturer
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-left text-gray-700 border-collapse">
                <thead class="text-xs text-gray-800 uppercase bg-gray-100">
                    <tr>
                        <th class="px-4 sm:px-6 py-3">Name</th>
                        <th class="px-4 sm:px-6 py-3">Email</th>
                        <th class="px-4 sm:px-6 py-3">Assigned Roles</th>
                        <th class="px-4 sm:px-6 py-3 text-right sm:text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="px-4 sm:px-6 py-4 font-medium text-gray-900">John</td>
                        <td class="px-4 sm:px-6 py-4 text-gray-700 break-all">john@petra.ac.id</td>
                        <td class="px-4 sm:px-6 py-4 space-y-1 sm:space-y-0 sm:space-x-2">
                            <span class="m-1 text-xs font-semibold inline-block py-1 px-2.5 rounded-full text-blue-700 bg-blue-100">
                                Head of Thesis Department
                            </span>
                            <span class="m-1 text-xs font-semibold inline-block py-1 px-2.5 rounded-full text-green-700 bg-green-100">
                                Head of Division
                            </span>
                        </td>
                        <td class="px-4 sm:px-6 py-4 text-right sm:text-center">
                            <a href="{{ url('/superadmin/editLecturerRoles/1') }}" 
                               class="inline-block w-full sm:w-auto text-center font-medium text-white bg-blue-600 hover:bg-blue-700 py-2 px-4 rounded-lg text-xs sm:text-sm shadow-sm transition duration-200">
                                Manage Roles
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
