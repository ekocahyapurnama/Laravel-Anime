<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnimeController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }


    public function index()
    {
        // mengambil data dari table tbl_siswa
        return view('/anime');
    }

    public function anime()
    {
    	// mengambil data dari table pegawai
        $anime = DB::table('anime')
        ->orderBy('id_anim', 'asc')
        ->get();

        // mengirim data siswa ke view index
        return view('/anime',['anime' => $anime]);

    }


    // method untuk menampilkan view form tambah siswa
    public function create()
    {
        // memanggil view tambah
        return view('/tambahanime');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'     => 'required',
            'episode'   => 'required',
            'genre'     => 'required',
            'rating'    => 'required',
            'studio'    => 'required',
            'sinopsis'  => 'required',
            'gambar'    => 'required|image|mimes:png,jpg,jpeg'
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/images', $gambar->getClientOriginalName());

        DB::table('anime')->insert([
            'judul'     => $request->judul,
            'episode'   => $request->episode,
            'genre'     => $request->genre,
            'rating'    => $request->rating,
            'studio'    => $request->studio,
            'sinopsis'  => $request->sinopsis,
            'gambar'    => $gambar->getClientOriginalName(),
        ]);

        return redirect('/anime');
    }

}
