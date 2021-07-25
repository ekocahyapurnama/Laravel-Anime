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

    public function edit($id)
    {

        $studio = DB::table('studio')->where('id_stud', $id)->get();

        return view('/studioedit', ['studio' => $studio]);
    }

    public function update(Request $request)
    {

        DB::table('studio')->where('id_stud',$request->id)->update([
            'studio' => $request->nama,
        ]);

        return redirect('/studio');
    }

    public function hapus($id)
    {

        DB::table('studio')->where('id_stud',$id)->delete();


        return redirect('/studio');
    }
}
