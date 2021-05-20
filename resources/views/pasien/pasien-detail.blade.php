@extends('layouts.master')
@section('title', 'Posyandu Lansia')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Data Lansia</h4>
                </div>
                <form action="{{ route('pasien.update', $data_pasien->id) }}" method="post">
                    @csrf
                    @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_pasien" value="{{ $data_pasien->nama_pasien }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" name="no_ktp" value="{{ $data_pasien->no_ktp }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label label>Alamat</label>
                        <input type="text" name="alamat" value="{{ $data_pasien->alamat }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label> <br>
                        <div class="form-check form-check-inline">
                        <label for="jenis_kelamin">
                            <input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin" {{$data_pasien->jenis_kelamin == 'L'? 'checked' : ''}} > Laki-Laki <br>
                            <input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin" {{$data_pasien->jenis_kelamin == 'P'? 'checked' : ''}} > Perempuan
                        </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label><br>
                        <input type="date" id="start" name="tgl_lahir" 
                        placeholder="dd-mm-yyyy" value="{{ $data_pasien->tgl_lahir }}" min="1950-01-01" max="2021-12-31" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <input type="text" name="gol_darah" value="{{ $data_pasien->gol_darah }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Riwayat Penyakit</label>
                        <input type="text" name="riwayat_penyakit" value="{{ $data_pasien->riwayat_penyakit }}" class="form-control">
                    </div>
    
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Edit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('page-scripts')

@endpush
