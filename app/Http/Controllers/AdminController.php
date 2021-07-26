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

    // method untuk menampilkan view form tambah siswa
    public function create()
    {
        // memanggil view tambah
        return view('/tambahuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'   => 'required',
            'role'     => 'required',
        ]);


        DB::table('users')->insert([
            'name'     => $request->name,
            'email'   => $request->email,
            'role'     => $request->role,
        ]);

        return redirect('/anime');
    }

    public function edit($id)
    {

        $users = DB::table('users')->where('id', $id)->get();

        return view('/useredit', ['users' => $users]);
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name'     => $request->name,
            'email'   => $request->email,
            'role'     => $request->role,
        ]);

        return redirect('/user');
    }

    public function hapus($id)
    {

        DB::table('users')->where('id',$id)->delete();


        return redirect('/user');
    }

}
