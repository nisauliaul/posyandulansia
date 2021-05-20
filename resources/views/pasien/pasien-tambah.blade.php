@extends('layouts.master')
@section('title', 'Posyandu Lansia')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                  <form action="{{ route('pasien.simpan') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_pasien" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="no_ktp" class="form-control">
                    </div>
                    <div class="form-group">
                        <label label>Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="L"/> Laki-laki <br>
                        <input type="radio" name="jenis_kelamin" value="P"/> Perempuan
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label><br>
                        <input type="date" id="start" name="tgl_lahir" 
                        placeholder="dd-mm-yyyy" value="" min="1950-01-01" max="2021-12-31" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" name="gol_darah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>
                        <input type="text" name="riwayat_penyakit" class="form-control">
                    </div>
                    </div>

                </div>
                  <div class="card-footer text-right">
                  <button class="btn btn-primary mr-1" type="submit">Submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
    
@endpush