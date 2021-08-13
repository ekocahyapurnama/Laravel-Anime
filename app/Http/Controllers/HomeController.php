<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }

    public function anime()
    {
        // mengambil data dari table pegawai
        $anime = DB::table('anime')
            ->orderBy('id_anim', 'asc')
            ->get();

        // mengirim data siswa ke view index
        return view('/home',['anime' => $anime]);


    }

    public function kontak()
    {
        return view('/kontak');
    }

}
