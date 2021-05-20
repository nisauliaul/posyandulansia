@extends('layouts.master')
@section('title','Posyandu Lansia')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                  <form action="{{ route('cklansia.simpan') }}" method="POST">
                    @csrf
                    <div class="form-group">
                    <label>Nama</label> <br>
                    <select name="id_pasien" class="form-control" aria-label="Default select example">
                        @foreach($pasien as $data)
                            <option value="{{$data->id}}">{{$data->nama_pasien}}  </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tgl Pemeriksaan</label>
                        <input type="date" id="start" name="created_at" 
                        placeholder="dd-mm-yyyy" value="" min="2019-01-01" max="2021-12-31" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Berat Badan (kg)</label>
                        <input type="text" name="bb_pasien" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tinggi Badan (cm)</label>
                        <input type="text" name="tb_pasien" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>IMT</label>
                        <input type="text" name="imt_pasien" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Tensi Darah</label>
                      <input type="text" name="tensi_darah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Kolesterol</label>
                        <input type="text" name="kolesterol" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gula Darah</label>
                        <input type="text" name="gula_darah" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Asam Urat</label>
                        <input type="text" name="asam_urat" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Keluhan</label>
                        <input type="text" name="keluhan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tindak Lanjut</label>
                        <input type="text" name="tindak_lanjut" class="form-control">
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
