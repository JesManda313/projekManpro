<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});
Route::get('/resetpassword', function () {
    return view('resetpassword');
});


// superadmin
Route::get('/superadmin/rolesPermission', function () { 
    return view('superadmin/rolesPermission');
})->name('superadmin.rolesPermission');

Route::get('/superadmin/assignLecturerRoles', function () { 
    return view('superadmin/assignLecturerRoles');
})->name('superadmin.assignLecturerRoles');

Route::get('/superadmin/createNewLecturerRole', function () {
    return view('superadmin/createNewLecturerRole');
})->name('superadmin.createLecturer');

Route::post('/superadmin/storeNewLecturerRole', function (Request $request) {
    return redirect()->route('superadmin.assignLecturerRoles')
                     ->with('success', 'New lecturer added and roles assigned!');
})->name('superadmin.storeLecturer');

Route::post('/superadmin/storeRole', function (Request $request) {
    return redirect()->route('superadmin.rolesPermission')
                     ->with('success', 'Role ' . $request->role_name . ' created!');
})->name('superadmin.storeRole');

Route::post('/superadmin/storePermission', function (Request $request) {
    return redirect()->back()->with('success', 'Permission ' . $request->permission_name . ' created!');
})->name('superadmin.storePermission');

Route::post('/superadmin/assignPermissions', function (Request $request) {
    return redirect()->back()->with('success', 'Permissions saved for role!');
})->name('superadmin.assignPermissions');

// dosen
Route::get('/dosen/listMahasiswa', function () {
    return view('dosen/listMahasiswa');
});
// Route::get('/dosen/addRole', function () {
//     return view('dosen/addRole');
// });
Route::get('/dosen/addVenue', function () {
    return view('dosen/addVenue');
});
Route::get('/dosen/pilihDosenPenguji', function () {
    return view('dosen/pilihDosenPenguji');
});


// mhs
Route::get('/mhs/dashboard', function () { return view('mhs/dashboardMhs');});
Route::get('/mhs/pilih-dosbing', function () { return view('mhs/pilihdosbingMhs');});
Route::get('/mhs/up-proposal', function () { return view('mhs/uploadProposalMhs');});
Route::get('/mhs/sidang-proposal', function () { return view('mhs/sidangProposalMhs');});
Route::get('/mhs/proposal-final', function () { return view('mhs/proposalFinalMhs');});
Route::get('/mhs/pendaftaran-skripsi', function () { return view('mhs/pendaftaranSkripsiMhs');});
Route::get('/mhs/jadwal-sidang-skripsi', function () { return view('mhs/jadwalSidangSkripsiMhs');});
Route::get('/mhs/submit-skripsi-final', function () { return view('mhs/submitSkripsiMhs');});
// Route::get('/profile', function () { return view('mhs/profileMhs');});
// Route::get('/profile', function () { return view('mhs/profileMhs');});
// Route::get('/settings', function () { return view('mhs/settingsMhs');});
// Route::get('/help', function () { return view('mhs/helpMhs');});
// Route::get('/logout', function () { return view('mhs/logoutMhs');});
// Route::get('/login', function () { return view('mhs/loginMhs');});       

