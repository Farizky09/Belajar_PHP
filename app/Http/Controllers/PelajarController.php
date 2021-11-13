<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelajarController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pelajar = DB::table('pelajar')->get();

    	// mengirim data pegawai ke view index
    	return view('index',['pelajar' => $pelajar]);

    }
    public function tambah(){

        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('pelajar')->insert([
            'Nama' => $request->Nama,
            'Kelas' => $request->Kelas,
            'Gender' => $request->Gender,
            'Alamat' => $request->Alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pelajar');

    }

    // method untuk edit data pegawai
    public function edit($NIK)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pelajar = DB::table('pelajar')->where('NIK',$NIK)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pelajar' => $pelajar]);

    }

        // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('pelajar')->where('NIK',$request->NIK)->update([
			'Nama' => $request->Nama,
            'Kelas' => $request->Kelas,
            'Gender' => $request->Gender,
            'Alamat' => $request->Alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pelajar');
    }

        // method untuk hapus data pegawai
    public function hapus($NIK)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('pelajar')->where('NIK',$NIK)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/pelajar');
    }

}