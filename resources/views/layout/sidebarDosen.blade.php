<div class="flex h-screen">
    <!-- Sidebar -->
    <aside 
        id="sidebar" 
        class="fixed inset-y-0 left-0 w-64 bg-gray-800 bg-opacity-80 text-white flex flex-col transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-50"
    >
        <!-- Header Sidebar -->
        <div class="px-4 py-2 text-2xl font-semibold border-b border-gray-700"><img src="{{ asset('../assets/logopcuputih.png') }}" alt="logopcuputih"></div>

        <!-- NAVIGATION MENU -->
        <nav class="flex-1 px-4 py-6 space-y-2">
            {{-- === UMUM / DOSEN === --}}
            <a href="/" 
                class="flex items-center px-4 py-2.5 rounded-lg font-medium 
                {{ request()->is('/') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Dashboard
            </a>

            <a href="/dosen/listMahasiswa" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('dosen/listMahasiswa') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Daftar Mahasiswa
            </a>

            <a href="/dosen/pilihDosenPenguji" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('dosen/pilihDosenPenguji') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Pilih Dosen Penguji
            </a>

            <a href="/dosen/addVenue" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('dosen/addVenue') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Tambah Tempat Sidang
            </a>

            {{-- === MENU SUPERADMIN KHUSUS === --}}
            <div class="border-t border-gray-700 my-3"></div>
            <p class="px-4 text-gray-400 text-sm font-semibold uppercase">Superadmin</p>

            <a href="{{ route('superadmin.rolesPermission') }}" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('superadmin/rolesPermission') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Roles & Permission
            </a>

            <a href="{{ route('superadmin.assignLecturerRoles') }}" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('superadmin/assignLecturerRoles') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Assign Lecturer Roles
            </a>

            <a href="{{ route('superadmin.createLecturer') }}" 
                class="flex items-center px-4 py-2.5 rounded-lg 
                {{ request()->is('superadmin/createNewLecturerRole') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700 text-gray-200' }}">
                Create New Lecturer
            </a>
        </nav>

        <!-- Footer Sidebar -->
        <div class="px-4 py-6 border-t border-gray-700">
            <a href="/logout" class="flex items-center px-4 py-2.5 text-gray-300 hover:bg-gray-700 rounded-lg">
                Log out
            </a>
        </div>
    </aside>

    <!-- Overlay -->
    <div id="blurOverlay" class="fixed inset-0 bg-transparent backdrop-blur-sm hidden z-40 lg:hidden"></div>

    <!-- Main Content -->
    <main id="mainContent" class="flex-1 flex flex-col ml-0 lg:ml-64 transition-all duration-300 min-w-0">
        <header class="flex items-center justify-between p-5 bg-white bg-opacity-70 backdrop-blur-sm">
            <div class="flex items-center space-x-4">
                <button id="hamburger" class="text-gray-600 lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <h1 class="text-xl font-semibold text-gray-800">
                    Pendaftaran & Penjadwalan Proposal Skripsi - Superadmin
                </h1>
            </div>
            <div class="text-md font-medium text-gray-700">
                Hello, {{ Auth::user()->name ?? 'Superadmin' }}
            </div>
        </header>

        <div class="flex-1 p-8 overflow-y-auto min-w-0">
            @yield('content1')
        </div>
    </main>
</div>

<!-- Sidebar Toggle Script -->
<script>
    const sidebar = document.getElementById('sidebar');
    const hamburger = document.getElementById('hamburger');
    const blurOverlay = document.getElementById('blurOverlay');

    function openSidebar() {
        sidebar.classList.remove('-translate-x-full');
        blurOverlay.classList.remove('hidden');
    }

    function closeSidebar() {
        sidebar.classList.add('-translate-x-full');
        blurOverlay.classList.add('hidden');
    }

    hamburger.addEventListener('click', () => {
        sidebar.classList.contains('-translate-x-full') ? openSidebar() : closeSidebar();
    });

    blurOverlay.addEventListener('click', closeSidebar);
</script>
