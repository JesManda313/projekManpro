<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
// admin
Route::get('/admin/dashboard', function () { return view('superadmin/dashboardAdmin');});
Route::get('/admin/add-role', function () { return view('superadmin/add-role');});



// mhs
Route::get('/mhs/dashboard', function () { return view('mhs/dashboardMhs');});
Route::get('/mhs/pilihdosbing', function () { return view('mhs/pilihdosbingMhs');});
Route::get('/mhs/topikdosen', function () { return view('mhs/topikDosen');});
Route::get('/mhs/sidang-proposal', function () { return view('mhs/sidangProposalMhs');});
Route::get('/mhs/sidang-skripsi', function () { return view('mhs/sidangSkripsiMhs');});
Route::get('/mhs/pendaftaran-skripsi', function () { return view('mhs/pendaftaranSkripsiMhs');});
Route::get('/mhs/jadwal-sidang-skripsi', function () { return view('mhs/jadwalSidangSkripsiMhs');});
// Route::get('/profile', function () { return view('mhs/profileMhs');});
Route::get('/profile', function () { return view('mhs/profileMhs');});
// Route::get('/settings', function () { return view('mhs/settingsMhs');});
// Route::get('/help', function () { return view('mhs/helpMhs');});
// Route::get('/logout', function () { return view('mhs/logoutMhs');});
// Route::get('/login', function () { return view('mhs/loginMhs');});       

// dosen