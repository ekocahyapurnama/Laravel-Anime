<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

    public function edit($id)
    {

        $anime = DB::table('anime')->where('id_anim', $id)->get();

        return view('/animeedit', ['anime' => $anime]);
    }

    public function update(Request $request)
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

        //get data Blog by ID
        $id = 'id_anim';
        DB::table('anime')->where('id_anim', $id)->get();

        if($request->file('gambar') == "") {

            DB::table('anime')->update([
                'judul'     => $request->judul,
                'episode'   => $request->episode,
                'genre'     => $request->genre,
                'rating'    => $request->rating,
                'studio'    => $request->studio,
                'sinopsis'  => $request->sinopsis,
            ]);

        } else {

            //hapus old image

            //$anime = DB::table('anime')->where('id_anim', $id)->get();

            //Storage::disk('local')->delete('public/images/'.$anime['gambar']);
            //File::delete(public_path("public/images/".$anime->gambar));

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/images', $gambar->getClientOriginalName());

            DB::table('anime')->update([
                'judul'     => $request->judul,
                'episode'   => $request->episode,
                'genre'     => $request->genre,
                'rating'    => $request->rating,
                'studio'    => $request->studio,
                'sinopsis'  => $request->sinopsis,
                'gambar'    => $gambar->getClientOriginalName(),
            ]);

        }

        return redirect('/anime');
    }

    public function hapus($id)
    {

        DB::table('anime')->where('id_anim',$id)->delete();


        return redirect('/anime');
    }

}
