<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatatanKesehatanController extends Controller
{
    //tampilkan data
    public function index() {
        $catatankesehatan = DB::table('catatankesehatan')
        ->join('data_pasien', 'data_pasien.id', '=', 'catatankesehatan.id_pasien')
        ->select('catatankesehatan.*', 'data_pasien.nama_pasien')->paginate(10);
        return view('catatanlansia.catatankesehatan', ['catatankesehatan' => $catatankesehatan]);
    }

    //method tampilan tambah data
    public function tambah(){
        $pasien = DB::table('data_pasien')
        ->select('data_pasien.*')
        ->get();
        return view('catatanlansia.catatankesehatan-tambah', ['pasien' => $pasien]);
    }

    //method simpan data
    public function simpan(Request $request){
        $data = DB::insert('insert into catatankesehatan (id_pasien, created_at, bb_pasien, tb_pasien, imt_pasien, tensi_darah, kolesterol, gula_darah, asam_urat) 
        values (?, ?, ?, ?, ?, ?, ?, ?, ?)',[$request->id_pasien, $request->created_at, $request->bb_pasien, $request->tb_pasien, $request->imt_pasien, $request->tensi_darah, $request->kolesterol, $request->gula_darah, $request->asam_urat ]);
        
        $id = DB::getPdo()->lastInsertId();

        DB::insert('insert into catatankeluhan (id_catatankesehatan, keluhan, tindak_lanjut) 
        values (?, ?, ?)',[$id, $request->keluhan, $request->tindak_lanjut ]);
        
        return redirect()->route('cklansia')->with('message', 'Data berhasil disimpan');
    }

    //method edit data
    public function edit($id){
        $catatankesehatan = DB::table('catatankesehatan')->where('id', $id)->first();
        $catatankeluhan = DB::table('catatankeluhan')->where('id_catatankesehatan', $id)->first();
        $pasien = DB::table('data_pasien')
        ->select('data_pasien.*')
        ->get();
        return view('catatanlansia.catatankesehatan-edit', 
        [
            'catatankesehatan' => $catatankesehatan, 
            'pasien' => $pasien, 
            'catatankeluhan' => $catatankeluhan]);
    }
 
    //method hapus data
    public function delete($id){
        DB::table('catatankesehatan')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }

    //method update data
    public function update(Request $request, $id){
        DB::table('catatankesehatan')->where('id', $id)->update([
            'id_pasien' => $request->id_pasien,
            'bb_pasien' => $request->bb_pasien,
            'tb_pasien' => $request->tb_pasien,
            'imt_pasien' => $request->imt_pasien,
            'tensi_darah' => $request->tensi_darah,
            'kolesterol' => $request->kolesterol,
            'gula_darah' => $request->gula_darah,
            'asam_urat' => $request->asam_urat,
        ]);

        DB::table('catatankeluhan')->where('id_catatankesehatan', $id)->update([
            'keluhan' => $request->keluhan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);
        return redirect()->route('cklansia')->with('message', 'Data berhasil diupdate');
    }
}
