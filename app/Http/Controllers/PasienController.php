<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasienController extends Controller
{
    //tampilan data
    public function index(){
        $data_pasien = DB::table('data_pasien')->paginate(10);
        return view('pasien.pasien', ['data_pasien' => $data_pasien]);
    }

    //method tampilan tambah data
    public function tambah(){
        return view('pasien.pasien-tambah');
    }

    //method simpan data
    public function simpan(Request $request){

        DB::insert('insert into data_pasien (nama_pasien, no_ktp, alamat, jenis_kelamin, tgl_lahir, gol_darah, riwayat_penyakit) 
        values (?, ?, ?, ?, ?, ?, ?)',[$request->nama_pasien, $request->no_ktp, $request->alamat, $request->jenis_kelamin, $request->tgl_lahir, $request->gol_darah, $request->riwayat_penyakit]);
        
        return redirect()->route('pasien')->with('message', 'Data berhasil disimpan');
    }

    //method edit data
    public function edit($id){
        $data_pasien = DB::table('data_pasien')->where('id', $id)->first();
        return view('pasien.pasien-edit', ['data_pasien' => $data_pasien]);
    }

    //method hapus data
    public function delete($id){
        DB::table('data_pasien')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }

    //method update data
    public function update(Request $request, $id){
        DB::table('data_pasien')->where('id', $id)->update([
            'nama_pasien' => $request->nama_pasien,
            'no_ktp' => $request->no_ktp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tgl_lahir' => $request->tgl_lahir,
            'gol_darah' => $request->gol_darah,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            
        ]);
        return redirect()->route('pasien')->with('message', 'Data berhasil diupdate');
    }

}
