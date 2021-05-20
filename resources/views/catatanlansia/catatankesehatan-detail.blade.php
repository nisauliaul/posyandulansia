@extends('layouts.master')
@section('title', 'Posyandu Lansia')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Detail Pemeriksaan Lansia</h4>
                </div>
                <form action="{{ route('cklansia.update', $catatankesehatan->id) }}" method="post">
                    @csrf
                    @method('patch')
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <select name="id_pasien" class="form-control" aria-label="Default select example">
                            @foreach($pasien as $data)
                                <option value="{{ $data->id }}" {{ $data->id == $catatankesehatan->id_pasien ? 'selected' : '' }}>{{ $data->nama_pasien }}</option>
                            @endforeach
                          </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pemeriksaan</label>
                        <input type="date" id="start" name="created_at" 
                        value="{{ $catatankesehatan->created_at }}" min="2019-01-01" max="2021-12-31" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Berat Badan (kg)</label>
                        <input type="text" name="bb_pasien" value="{{ $catatankesehatan->bb_pasien }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan (cm)</label>
                        <input type="text" name="tb_pasien" value="{{ $catatankesehatan->tb_pasien }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>IMT</label>
                        <input type="text" name="imt_pasien" value="{{ $catatankesehatan->imt_pasien }}" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tensi Darah</label>
                      <input type="text" name="tensi_darah" value="{{ $catatankesehatan->tensi_darah }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kolesterol</label>
                        <input type="text" name="kolesterol" value="{{ $catatankesehatan->kolesterol }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gula Darah</label>
                        <input type="text" name="gula_darah" value="{{ $catatankesehatan->gula_darah }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Asam Urat</label>
                        <input type="text" name="asam_urat" value="{{ $catatankesehatan->asam_urat }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" value="{{ $catatankeluhan->keluhan }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tindak Lanjut</label>
                        <input type="text" name="tindak_lanjut" value="{{ $catatankeluhan->tindak_lanjut }}" class="form-control">
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
