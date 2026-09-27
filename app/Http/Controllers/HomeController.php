<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\BMKG;

// Untuk saat ini kita coba SQL...
use Illuminate\Support\Facades\DB;

class HomeController
{
    public function index()
    {
        BMKG::cuaca();

    //Original Controller
        $hasil = DB::select(
                'SELECT * FROM daftar_pengunjung'
            );

        return view('welcome', [
            'hasil' => $hasil
        ]);
    }

    public function bertamu()
    {
        return view('welcome3');
    }

    public function tambah()
    {
        DB::insert(
            'INSERT INTO daftar_pengunjung (nama) VALUES (?)',
            ['Budi']
        );

        return redirect('/');
    }


}
