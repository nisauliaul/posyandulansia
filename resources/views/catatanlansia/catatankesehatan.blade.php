@extends('layouts.master')
@section('title','Posyandu Lansia')
@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <a href="{{ route('cklansia.tambah') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i>Tambah</a>
            <input class="form-control mt-2" id="myInput" type="text" placeholder="Cari Nama" style="width:25%">
            <hr>
            @if (session('message'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                  </button>
                  {{session('message')}}
                </div>
              </div>
            @endif
            <table style="text-align:center" class="table table-striped table-bordered table-sm">
                <tr>
                    <th>No</th>
                    <th>Tgl Pemeriksaan</th>
                    <th>Nama</th>
                    <th>Berat Badan (kg)</th>
                    <th>Tinggi Badan (cm)</th>
                    <th>IMT</th>
                    <th>Tensi Darah</th>
                    <th>Gula Darah</th>
                    {{-- <th>Kolesterol</th> --}}
                    {{-- <th>Asam Urat</th> --}}
                    <th>Action</th>
                </tr>

                <tbody id="myTable">
                    @foreach($catatankesehatan as $no => $data_lansia)
                    <tr>
                        <td>{{ $catatankesehatan->firstItem()+$no }}</td>
                        <td>{{ $data_lansia->created_at }}</td>
                        <td>{{ $data_lansia->nama_pasien }}</td>
                        <td>{{ $data_lansia->bb_pasien }}</td>
                        <td>{{ $data_lansia->tb_pasien }}</td>
                        <td>{{ $data_lansia->imt_pasien }}</td>
                        <td>{{ $data_lansia->tensi_darah }}</td>
                        <td>{{ $data_lansia->gula_darah }}</td>
                        {{-- <td>{{ $data_lansia->kolesterol }}</td> --}}
                        {{-- <td>{{ $data_lansia->asam_urat }}</td> --}}
                        <td>
                            <a href="#" class="btn btn-info">Detail</a>
                            <a href="{{ route('cklansia.edit', $data_lansia->id) }}" class="btn btn-warning">Edit</a>
                            <a href="#" data-id="{{ $data_lansia->id }}" class="btn btn-danger swal-confirm">
                                <form action="{{ route('cklansia.delete', $data_lansia->id) }}" id="delete{{ $data_lansia->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            {{ $catatankesehatan->links() }}
        </div>
    </div>
</div>
@endsection

@push('page-scripts')
<script src="{{ asset('assets/node_modules/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush

@push('after-scripts')
<script>
$(".swal-confirm").click(function(e) {
    id = e.target.dataset.id;
        swal({
        title: 'Yakin hapus data?',
        text: 'Data yang dihapus, akan dihapus secara permanen!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,
        })
    .then((willDelete) => {
        if (willDelete) {
    swal('Data anda telah dihapus!', {
    icon: 'success',
    });
        $(`#delete${id}`).submit();
        } else {
        }
    });
});
</script>
@endpush
