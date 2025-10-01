@extends('layout.base')

@section('content')
<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-full lg:w-1/3 bg-white flex items-center justify-center p-8 lg:p-12">
            <div class="w-full max-w-sm">
                <h1 class="font-playfair text-6xl font-bold mb-2">PETRA</h1>
                <h2 class="text-xl font-medium text-gray-700 mb-8">Pendaftaran & Penjadwalan Proposal Skripsi</h2>

                <form action="#" method="POST">
                    <div class="mb-4">
                        <input type="text" id="student_id" name="student_id" placeholder="c14230151" class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="mb-4 flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-100 border border-r-0 border-gray-200 rounded-l-md">@</span>
                        <select class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-r-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>john.petra.ac.id</option>
                            <option>peter.petra.ac.id</option>
                        </select>
                    </div>
                    <div class="mb-6">
                        <input type="password" id="password" name="password" placeholder="password" class="w-full px-4 py-3 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <p class="text-sm mb-5">Keterangan pengisian username <br>
                            - Mahasiswa : sesuai dengan email di john.petra.ac.id <br>
                            - Dosen : sesuai dengan email di peter.petra.ac.id</p>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-gray-700 text-white font-medium py-3 px-4 rounded-lg hover:bg-gray-800 transition-colors duration-300">
                            LOG IN
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden lg:block lg:w-2/3 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&w=2574&auto=format&fit=crop');">
        </div>
    </div>
</body>
</html>