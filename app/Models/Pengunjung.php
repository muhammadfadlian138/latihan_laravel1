<?php

namespace App\Models;

// Abaikan dulu. (Sep-27)
// use Illuminate\Database\Eloquent\Model;

class Pengunjung extends Model
{
    public function index()
    {
        return view('tamu', [
            'para_tamu' => DB::select(
                'SELECT * FROM daftar_pengunjung'
            )
        ]);
    }
}
