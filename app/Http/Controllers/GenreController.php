<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }


    public function index()
    {
        // mengambil data dari table tbl_siswa
        return view('/genre');
    }

    public function genre()
    {
    	// mengambil data dari table pegawai
        $genre = DB::table('genre')
        ->orderBy('id_gen', 'asc')
        ->get();

        // mengirim data siswa ke view index
        return view('/genre',['genre' => $genre]);

    }

    // method untuk menampilkan view form tambah siswa
    public function tambah()
    {
        // memanggil view tambah
        return view('/tambahgenre');
    }

    public function store(Request $request)
    {
        // insert data ke table tbl_siswa
        DB::table('genre')->insert([
            'genre' => $request->genre,
        ]);

        // alihkan halaman ke halaman siswa
        return redirect('/genre');
    }

    public function edit($id)
    {

        $genre = DB::table('genre')->where('id_gen', $id)->get();

        return view('/genreedit', ['genre' => $genre]);
    }

    public function update(Request $request)
    {

        DB::table('genre')->where('id_gen',$request->id)->update([
            'genre' => $request->genre,
        ]);

        return redirect('/genre');
    }

    public function hapus($id)
    {

        DB::table('genre')->where('id_gen',$id)->delete();


        return redirect('/genre');
    }
}
