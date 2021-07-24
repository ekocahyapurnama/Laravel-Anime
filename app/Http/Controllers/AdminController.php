<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // agar halaman pegawai bisa dilihat kalau sudah login
	public function __construct()
    {
        $this->middleware('checkRole:admin');
    }
	
    public function index()
    {
    	// mengambil data dari table pegawai

    	// mengirim data pegawai ke view index
    	return view('/admin');

    }
    public function user()
    {
    	// mengambil data dari table pegawai
    	$user = DB::table('users')->get();

    	// mengirim data pegawai ke view index
    	return view('/user',['users' => $user]);

    }

}
