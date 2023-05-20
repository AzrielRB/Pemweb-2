<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user/index', ['kategoriuser' => 'Admin']);
    }

    public function daftar()
    {
        $ar_kategori = ["Dosen", "Mahasiswa", "Staff"];
        return view('user/daftar', ['kategori' => $ar_kategori]);
    }

    public function store(Request $request){
        $nama = $request->input('nama');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $alamat = $request->input('alamat');
        return view('user/sukses',
            ['nama'=>$nama, 'email'=>$email, 'kategori'=>$kategori, 'alamat'=>$alamat]);
    }

    public function form()
    {
        $ar_jenis = ["Pria", "Wanita"];
        return view('user/form', ['jenis' => $ar_jenis]);
    }

    public function checkup(Request $request){
        $nama = $request->input('nama');
        $usia = $request->input('usia');
        $tgl = $request->input('tgl');
        $jenis = $request->input('jk'); 
        return view('user/berhasil',
            ['nama'=>$nama, 'usia'=>$usia, 'tgl'=>$tgl, 'jk'=>$jenis]);
    }
}