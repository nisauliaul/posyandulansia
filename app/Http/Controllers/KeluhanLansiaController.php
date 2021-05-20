<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeluhanLansiaController extends Controller
{
    //tampilkan data
    public function index() {
        $catatankeluhan = DB::table('catatankeluhan')
        ->join('data_pasien', 'data_pasien.id', '=', 'catatankeluhan.id_pasien')
        ->select('catatankeluhan.*', 'data_pasien.nama_pasien')->paginate(5);
        return view('catatanlansia.catatankeluhan', ['catatankeluhan' => $catatankeluhan]);
    }

    //method tampilan tambah data
    public function tambah(){
        $pasien = DB::table('data_pasien')
        ->select('data_pasien.*')
        ->get();
        return view('catatanlansia.catatankeluhan-tambah', ['pasien' => $pasien]);
    }

    //method simpan data
    public function simpan(Request $request){
        DB::insert('insert into catatankeluhan (id_pasien, tgl, keluhan, tindak_lanjut) 
        values (?, ?, ?, ?)',[$request->id_pasien, $request->tgl, $request->keluhan, $request->tindak_lanjut ]);
        
        return redirect()->route('ckeluhan')->with('message', 'Data berhasil disimpan');
    }

    //method edit data
    public function edit($id){
        $catatankeluhan = DB::table('catatankeluhan')->where('id', $id)->first();
        $pasien = DB::table('data_pasien')
        ->select('data_pasien.*')
        ->get();
        return view('catatanlansia.catatankeluhan-edit', ['catatankeluhan' => $catatankeluhan, 'pasien' => $pasien]);
    }
 
    //method hapus data
    public function delete($id){
        DB::table('catatankeluhan')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }

    //method update data
    public function update(Request $request, $id){
        DB::table('catatankeluhan')->where('id', $id)->update([
            'id_pasien' => $request->id_pasien,
            'tgl' => $request->tgl,
            'keluhan' => $request->keluhan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('ckeluhan')->with('message', 'Data berhasil diupdate');
    }
}