<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // ... method Anda yang lain ...

    public function addRole() // Pastikan nama method ini sesuai dengan di routes/web.php
    {
        // HANYA baris ini. Jangan gunakan return file_get_contents.
        return view('addRole'); // 'addRole' adalah nama file blade Anda
    }
}