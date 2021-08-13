<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelkamController extends Controller
{
    public function animewel()
    {
        // mengambil data dari table pegawai
        $anime = DB::table('anime')
            ->orderBy('id_anim', 'asc')
            ->get();

        // mengirim data siswa ke view index
        return view('welcome',['anime' => $anime]);


    }
}
