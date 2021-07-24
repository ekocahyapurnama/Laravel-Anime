<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }


    public function index()
    {
        // mengambil data dari table tbl_siswa
        return view('/studio');
    }

    public function studio()
    {
    	// mengambil data dari table pegawai
    	$studio = DB::table('studio')
        ->orderBy('id_stud', 'asc')
        ->get();

    	// mengirim data pegawai ke view index
    	return view('/studio',['studio' => $studio]);

    }

    // method untuk menampilkan view form tambah siswa
    public function tambah()
    {
        // memanggil view tambah
        return view('/tambahstudio');
    }

    public function store(Request $request)
    {
        // insert data ke table tbl_siswa
        DB::table('studio')->insert([
            'nama' => $request->studio,
        ]);

        // alihkan halaman ke halaman siswa
        return redirect('/studio');
    }
}
